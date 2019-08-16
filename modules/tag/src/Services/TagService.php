<?php
namespace APV\Tag\Services;

use APV\Tag\Models\Tag;
use APV\Tag\Models\TagProduct;
use APV\Product\Models\Product;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class TagService extends BaseService
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }

    public function create($input)
    {
        //param: name, status
        $tagId = Tag::create($input)->id;
        if (!$tagId) {
            return false;
        }
        return $tagId;
    }

    public function getList()
    {
        $data = Tag::all();
        return $data->toArray();
    }

    public function getDetail($tagId, $field = null)
    {
        $tag = Tag::find($tagId);
        if (!$tag) {
            return false;
        }
        if ($field) {
            return $tag->$field;
        }
        return $tag->toArray();
    }

    public function postEdit($tagId, $input)
    {
        $tag = Tag::find($tagId);
        if (!$tag) {
            return false;
        }
        $tag->update($input);
        return true;
    }

    public function postDelete($tagId)
    {
        TagProduct::where('tag_id', $tagId)->delete();
        $tag = Tag::find($tagId);
        if (!$tag) {
            return false;
        }
        Tag::destroy($tagId);
        return true;
    }

    public function getListTagProduct($input, $tagId)
    {
        $data = [];
        $data['id'] = $tagId;
        $data['name'] = Tag::find($tagId)->name;
        $listProductIds = TagProduct::where('tag_id', $tagId)->pluck('id');
        foreach ($listProductIds as $key => $productId) {
            $data[$key]['product_id'] = $productId;
            $data[$key]['product_name'] = Product::find($productId)->name;
        }
        return $data;
    }

    public function createTagProduct($input, $tagId, $productId)
    {
        $tagProductId = TagProduct::create(['tag_id' => $tagId, 'product_id' => $productId])->id;
        if (!$tagProductId) {
            return false;
        }
        return $tagProductId ;
    }

    public function getDetailTagProduct($tagId, $productId)
    {
        $data = [
            'product_id' => $productId, 
            'tag_id' => $tagId, 
        ];
        return $data;
    }
    public function postEditTagProduct($input, $tagId, $productId)
    {
        $this->postDeleteTagProduct($tagId, $productId);
        $data = $this->createTagProduct($input, $tagId, $productId);
        return $data;
    }
    public function postDeleteTagProduct($tagId, $productId)
    {
        TagProduct::where('tag_id', $tagId)->where('product_id', $productId)->delete();
        return true;
    }
    
}
