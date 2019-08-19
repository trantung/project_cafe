<?php
namespace APV\Size\Services;

use APV\Size\Models\Size;
use APV\Size\Models\SizeProduct;
use APV\Size\Models\SizeResource;
use APV\Size\Models\Step;
use APV\Material\Models\Material;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class SizeService extends BaseService
{
    public function __construct(Size $model)
    {
        parent::__construct($model);
    }

    public function create($input)
    {
        //param: name, status
        $sizeId = Size::create($input)->id;
        if (!$sizeId) {
            return false;
        }
        return $sizeId;
    }

    public function getList()
    {
        $data = Size::all();
        return $data->toArray();
    }

    public function getDetail($sizeId, $field = null)
    {
        $size = Size::find($sizeId);
        if (!$size) {
            return false;
        }
        if ($field) {
            return $size->$field;
        }
        return $size->toArray();
    }

    public function postEdit($sizeId, $input)
    {
        $size = Size::find($sizeId);
        if (!$size) {
            return false;
        }
        $size->update($input);
        return true;
    }

    public function deleteRelation($sizeId)
    {
        Step::where('size_id', $sizeId)->delete();
        SizeResource::where('size_id', $sizeId)->delete();
        SizeProduct::where('size_id', $sizeId)->delete();
        return true;
    }

    public function postDelete($sizeId)
    {
        $this->deleteRelation($sizeId);
        $size = Size::find($sizeId);
        if (!$size) {
            return false;
        }
        Size::destroy($sizeId);
        return true;
    }

    public function getListSizeProduct()
    {
        
    }
    /**
     * [createSizeProduct description]
     * @param  [type] $input: dang array của nguyên liệu chế biến 
     * price => 100,
     * material => [{material_id=>1,quantity=>2},{material_id=>2,quantity=>2}]
     * @param  [type] $sizeId    [description]
     * @param  [type] $productId [description]
     * @return [type]            [description]
     */
    public function createSizeProduct($input, $sizeId, $productId)
    {
        $sizeProductId = SizeProduct::create(['size_id' => $sizeId, 'product_id' => $productId, 'price' => $input['price']])->id;
        if (!$sizeProductId) {
            return false;
        }
        // $test = str_replace('[', '', $input['key']);
        // $test = str_replace(']', '', $test);
        // $explode = explode(',', $test);
        // dd($input['order']);
        $sizeProductMaterialId = $this->createSizeProductMaterial($input, $sizeProductId);
        if (!$sizeProductMaterialId) {
            return false;
        }
        return 'sizeProductId = '. $sizeProductId . 'and sizeProductMaterialId = ' . $sizeProductMaterialId;
    }

    public function getDetailSizeProduct($sizeId, $productId)
    {
        $product = Product::find($productId);
        $size = Size::find($sizeId);
        $sizeProduct = SizeProduct::where('product_id', $productId)
            ->where('size_id', $sizeId)->first();
        if (!$product|| !$size || !$sizeProduct) {
            return false;
        }
        $materialId = $sizeProduct->material_id;
        $material = Material::find($materialId);
        if (!$material) {
            return false;
        }
        $data = [
            'product_id' => $productId, 
            'size_id' => $sizeId, 
            'product_name' => $product->name, 
            'size_name' => $size->name, 
            'material_id' => $material->id, 
            'material_name' => $material->name, 
            'price' => $sizeProduct->price, 
            'active' => $sizeProduct->active, 
        ];
        return $data;
    }
    public function postEditSizeProduct($input, $sizeId, $productId)
    {
        $this->postDeleteSizeProduct($sizeId, $productId);
        $data = $this->createSizeProduct($input, $sizeId, $productId);
        return $data;
    }
    public function postDeleteSizeProduct($sizeId, $productId)
    {
        Step::where('size_id', $sizeId)->where('product_id', $productId)->delete();
        SizeResource::where('size_id', $sizeId)->where('product_id', $productId)->delete();
        SizeProduct::where('size_id', $sizeId)->where('product_id', $productId)->delete();
        return true;
    }

    public function createStep($sizeProductMaterial, $objectStep)
    {
        $step['product_id'] = $sizeProductMaterial->product_id;
        $step['size_id'] = $sizeProductMaterial->size_id;
        $step['material_id'] = $sizeProductMaterial->material_id;
        $step['name'] = $objectStep['name'];
        $step['quantity'] = $objectStep['quantity'];
        $stepId = Step::create($step)->id;
        if (!$stepId) {
            return false;
        }
        return $stepId;
    }

    public function createSizeProductMaterial($input, $sizeProductId)
    {
        if (!isset($input['material'])) {
            return false;
        }
        $step = [];
        $sizeProduct = SizeProduct::find($sizeProductId);
        foreach ($input['material'] as $key => $material) {
            $dataId = SizeResource::create([
                'size_product_id' => $sizeProductId,
                'product_id' => $sizeProduct->product_id,
                'size_id' => $sizeProduct->size_id,
                'material_id' => $material['material_id'],
                'quantity' => $material['quantity'],
                'min' => $material['min'],
                'max' => $material['max'],
                'status' => $material['status'],
                'step_distance' => $material['step_distance'],
            ])->id;
            if (!$dataId) {
                return false;
            }
            $sizeProductMaterial = SizeResource::find($dataId);
            foreach ($material['step'] as $key => $objectStep) {
                $step = $this->createStep($sizeProductMaterial, $objectStep);
                if (!$step) {
                    return false;
                }
            }

        }
        return true;
    }
    
}
