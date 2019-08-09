<?php
namespace APV\Size\Services;

use APV\Size\Models\Size;
use APV\Size\Models\SizeProduct;
use APV\Size\Models\SizeResource;
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
        //param: name, statuss
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

    public function getDetail($sizeId)
    {
        $size = Size::find($sizeId);
        if (!$size) {
            return false;
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

    public function postDelete($sizeId)
    {
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
        $sizeProductId = SizeProduct::create(['size_id' => $siteId, 'product_id' => $productId, 'price' => $input['price']])->id;
        if (!$sizeProductId) {
            return false;
        }
        $sizeProductMaterialId = $this->createSizeProductMaterial($input, $sizeProductId);
        if (!$sizeProductMaterialId) {
            return false;
        }
        return 'sizeProductId = '. $sizeProductId . 'and sizeProductMaterialId = ' . $sizeProductMaterialId;
    }

    public function getDetailSizeProduct($sizeId, $productId)
    {

    }
    public function postEditSizeProduct($input, $sizeId, $productId)
    {
        $this->postDeleteSizeProduct($sizeId, $productId);
        $data = $this->createSizeProduct($input, $sizeId, $productId);
        return $data;
    }
    public function postDeleteSizeProduct($sizeId, $productId)
    {
        SizeResource::where('size_id', $sizeId)->where('product_id', $productId)->delete();
        SizeProduct::where('size_id', $sizeId)->where('product_id', $productId)->delete();
        return true;
    }

    public function createSizeProductMaterial($input, $sizeProductId)
    {
        if (!isset($input['material'])) {
            return false;
        }
        $sizeProduct = SizeProduct::find($sizeProductId);
        foreach ($input['material'] as $key => $material) {
            $dataId = SizeResource::create([
                'size_product_id' => $sizeProductId,
                'productId' => $sizeProduct->product_id,
                'size_id' => $sizeProduct->size_id,
                'material_id' => $material->material_id,
                'quantity' => $material->quantity,
            ]);
            if (!$dataId) {
                return false;
            }
        }
        return true;
    }
    
}
