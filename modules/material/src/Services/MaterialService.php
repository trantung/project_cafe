<?php
namespace APV\Material\Services;

use APV\Material\Models\Material;
use APV\Material\Models\MaterialType;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class MaterialService extends BaseService
{
    public function __construct(Material $model)
    {
        parent::__construct($model);
    }

    public function postCreate($input)
    {
        //param: name, statuss
        $materialId = Material::create($input)->id;
        if (!$materialId) {
            return false;
        }
        return $materialId;
    }

    public function getList()
    {
        $data = Material::all();
        return $data->toArray();
    }

    public function getDetail($materialId)
    {
        $material = Material::find($materialId);
        if (!$material) {
            return false;
        }
        return $material->toArray();
    }

    public function postEdit($materialId, $input)
    {
        $material = Material::find($materialId);
        if (!$material) {
            return false;
        }
        $material->update($input);
        return true;
    }

    public function postDelete($materialId)
    {
        $material = Material::find($materialId);
        if (!$material) {
            return false;
        }
        Material::destroy($materialId);
        return true;
    }

    public function getListMaterialProduct()
    {
        
    }
    public function createMaterialProduct()
    {
        
    }
    public function getDetailMaterialProduct()
    {

    }
    public function postEditMaterialProduct()
    {

    }
    public function postDeleteMaterialProduct()
    {

    }
    
}
