<?php
namespace APV\Size\Services;

use APV\Size\Models\Size;
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
    public function createSizeProduct()
    {
        
    }
    public function getDetailSizeProduct()
    {

    }
    public function postEditSizeProduct()
    {

    }
    public function postDeleteSizeProduct()
    {

    }
    
}
