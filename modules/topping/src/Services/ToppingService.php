<?php
namespace APV\Topping\Services;

use APV\Topping\Models\Topping;
use APV\Topping\Models\ToppingCategory;
use APV\Category\Models\Category;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class ToppingService extends BaseService
{
    public function __construct(Topping $model)
    {
        parent::__construct($model);
    }

    public function createToppingCategories($toppingId, $categories)
    {
        dd($categories);
    }

    public function create($input)
    {
        $categories = getCategoriesByString($input['categories']);
        $toppingId = Topping::create(['name' => $input['name'], 'price' => $input['price'], 'status' => 1])->id;
        $topping = Topping::find($toppingId);
        $topping->categories()->attach($categories);
        if (!$toppingId) {
            return false;
        }
        return true;
    }

    public function getList()
    {
        $topping = Topping::all();
        return $topping->toArray();
    }

    public function getCategoriesByTopping($toppingId)
    {
        $data = [];
        $list = ToppingCategory::where('topping_id', $toppingId)->get();
        foreach ($list as $key => $value) {
            $category = Category::find($value->category_id);
            if ($category) {
                $data[$key]['category_id'] = $category->id;
                $data[$key]['category_name'] = $category->name;
            }
        }
        return $data;
    }

    public function getDetail($toppingId)
    {
        $topping = Topping::find($toppingId);
        if (!$topping) {
            return false;
        }
        $data = $topping->toArray();
        $data['categories'] = $this->getCategoriesByTopping($toppingId);
        return $data;
    }

    public function edit($toppingId, $input)
    {
        $topping = Topping::find($toppingId);
        if (!$topping) {
            return false;
        }
        $topping->update(['name' => $input['name'], 'price' => $input['price'], 'status' => 1]);
        $categories = getCategoriesByString($input['categories']);
        $topping->categories()->sync($categories);
        return true;
    }

    public function delete($toppingId)
    {
        $topping = Topping::find($toppingId);
        if (!$topping) {
            return false;
        }
        $topping->categories()->detach();
        Topping::destroy($toppingId);
        return true;
    }
}
