<?php
namespace APV\Promotion\Services;

use APV\Promotion\Models\Promotion;
use APV\Product\Models\Product;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class PromotionService extends BaseService
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }

    public function create($input)
    {
        //param: 'name', 'status', 'percent', 'money_total_min', 'money_promotion', 'start_time', 'end_time'
        $promotionId = Promotion::create($input)->id;
        if (!$promotionId) {
            return false;
        }
        return $promotionId;
    }

    public function getList()
    {
        $data = Promotion::all();
        return $data->toArray();
    }

    public function getDetail($promotionId, $field = null)
    {
        $promotion = Promotion::find($promotionId);
        if (!$promotion) {
            return false;
        }
        if ($field) {
            return $promotion->$field;
        }
        return $promotion->toArray();
    }

    public function postEdit($promotionId, $input)
    {
        $promotion = Promotion::find($promotionId);
        if (!$promotion) {
            return false;
        }
        $promotion->update($input);
        return true;
    }

    public function postDelete($promotionId)
    {
        $promotion = Promotion::find($promotionId);
        if (!$promotion) {
            return false;
        }
        Promotion::destroy($promotionId);
        return true;
    }
    
}
