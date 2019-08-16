<?php
namespace APV\Tag\Services;

use DB;
use APV\Tag\Models\Tag;
use APV\Tag\Models\TagProduct;
use APV\Product\Models\Product;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class InforService extends BaseService
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }

    public function getInforByQuery($query)
    {
        $results = DB::select( DB::raw($query));
        return $results;
    }

    public function getInforByModel($input)
    {
        $data = '';
        // $model = $input['model'];
        // $method = $input['method'];
        // $field = $input['field'];
        // $value = $input['value'];
        // if ($method == 'find') {
        //     $data = $model->find($value);
        //     return $data;
        // }
        // if ($method == 'where') {
        //     dd($field);
        //     $data = $model->where($field, $value)->get();
        //     return $data;
        // }
        
        return $data;
    }

    public function postInfor($input)
    {
        if (isset($input['query'])) {
            return $this->getInforByQuery($input['query']);
        }
        return $this->getInforByModel($input);
    }

}
