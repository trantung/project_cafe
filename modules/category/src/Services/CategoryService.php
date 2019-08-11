<?php
namespace APV\Category\Services;

use APV\Category\Models\Category;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CategoryService extends BaseService
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function createCategory($input)
    {
        $file = request()->file('image');
        if (!$file) {
            return false;
        }
        $path = explode('_', $input['path']);
        $input['parent_id'] = end($path);
        $categoryId = Category::create($input)->id;
        if (!$categoryId) {
            return false;
        }
        $fileNameImage = $file->getClientOriginalName();
        request()->file('image')->move(public_path("/uploads/categories/" . $categoryId . '/'), $fileNameImage);
        $imageUrl = '/uploads/categories/' . $categoryId . '/' . $fileNameImage;
        if ($input['parent_id'] == 0) {
            Category::where('id', $categoryId)->update(['path' => $categoryId, 'image' => $imageUrl]);
        } else {
            Category::where('id', $categoryId)->update(['path' => $input['path'] . '_' . $categoryId, 'image' => $imageUrl]);
        }
        
        return $categoryId;
    }

    public function getList()
    {
        $cateRoot = $this->getRoot();
        $cateChild = $this->getListChild();
        $data = array_merge($cateRoot, $cateChild);
        return $data;
    }

    public function getRoot()
    {
        $data = Category::where('parent_id', 0)->get();
        $result = $this->getNameListCategoryWithPath($data);
        return $result;
    }

    public function getListChild()
    {
        $data = Category::where('parent_id', '!=', 0)->get();
        $result = $this->getNameListCategoryWithPath($data);
        return $result;
    }

    public function getNameCategoryWithPath($category)
    {
        if (!isset($category)) {
            return null;
        }
        if ($category->parent_id == 0) {
            $name = $category->name;
            return $result = ['path' => $category->path, 'name' => $name];
        }
        $categoryPath = $category->path;
        $explodePath = explode('_', $categoryPath);
        $name = '';
        foreach ($explodePath as $key => $value) {
            if (count($explodePath) - 1 > $key) {
                $name .= Category::find($value)->name . '-->';
            } else {
                $name .= Category::find($value)->name;
            }
        }
        $result = ['path' => $categoryPath, 'name' => $name];
        return $result;
    }
    public function getNameListCategoryWithPath($data)
    {
        $result = [];
        foreach ($data as $category) {
            $result[] = $this->getNameCategoryWithPath($category);
        }
        return $result;
    }

    public function getDetail($categoryId)
    {
        $category = Category::find($categoryId);
        $data['name'] = $category->name;
        $data['image'] = $category->image;
        $data['active'] = $category->active;
        $data['description'] = $category->description;
        $data['path'] = $this->getNameCategoryWithPath($category);
        return $data;
    }

    public function postEdit($categoryId, $input)
    {
        // dd($categoryId);
        $category = Category::find($categoryId);
        $file = request()->file('image');
        if (!$file) {
            $input['image'] = $category->image;
        } else {
            $fileNameImage = $file->getClientOriginalName();
            request()->file('image')->move(public_path("/uploads/categories/" . $categoryId . '/'), $fileNameImage);
            $imageUrl = '/uploads/categories/' . $categoryId . '/' . $fileNameImage;
            $input['image'] = $imageUrl;
        }
        if ($input['path'] == 0) {
            $input['path'] = $categoryId;
        } else {
            $input['path'] = $input['path'] . '_' .$categoryId;
        }
        $category->update($input);
        return true;
    }

    public function postDelete($categoryId)
    {
        $category = Category::find($categoryId);
        if (!$category) {
            return false;
        }
        Category::destroy($categoryId);
        return true;
    }
}
