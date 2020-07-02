<?php
namespace APV\Promotion\Services;

use APV\Promotion\Models\Promotion;
use APV\Promotion\Models\Voucher;
use APV\Promotion\Constants\PromotionDataConst;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class PromotionService extends BaseService
{
    public function __construct(Promotion $model)
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

    public function voucherGetList($input)
    {
        $check = $this->checkCustomerLogin($input);
        if (!$check) {
            return false;
        }
        $data = Voucher::all();
        $res = [];
        foreach ($data as $key => $voucher) {
            $res[$key]['voucher_id'] = $voucher->id;
            $res[$key]['voucher_name'] = $voucher->name;
            $res[$key]['voucher_start_time'] = $voucher->start_time;
            $res[$key]['voucher_end_time'] = $voucher->end_time;
            $res[$key]['voucher_money_promotion'] = $voucher->money_promotion;
            $res[$key]['voucher_percent_promotion'] = $voucher->percent_promotion;
            $res[$key]['voucher_quantity'] = $voucher->quantity;
            $res[$key]['voucher_code'] = $voucher->code;
            $res[$key]['voucher_status'] = $voucher->status;
        }
        return $res;
    }
    
    public function voucherGetDetail($input)
    {
        $check = $this->checkCustomerLogin($input, 'voucher_id');
        if (!$check) {
            return false;
        }
        $voucherId = $input['voucher_id'];
        $voucher = Voucher::find($voucherId);
        if (!$voucher) {
            return false;
        }
        $res = [];
        $res['voucher_id'] = $voucher->id;
        $res['voucher_name'] = $voucher->name;
        $res['voucher_start_time'] = $voucher->start_time;
        $res['voucher_end_time'] = $voucher->end_time;
        $res['voucher_money_promotion'] = $voucher->money_promotion;
        $res['voucher_percent_promotion'] = $voucher->percent_promotion;
        $res['voucher_quantity'] = $voucher->quantity;
        $res['voucher_code'] = $voucher->code;
        $res['voucher_status'] = $voucher->status;
        return $res;
    }

    //to-do
    public function checkVoucherExpired($voucher)
    {
        return true;
    }
    public function checkVoucherCount($voucher)
    {
        return true;
    }
    public function checkVoucherNotUsed ($voucher)
    {
        return true;
    }
    public function voucherCheckCode($input)
    {
        $check = $this->checkCustomerLogin($input, 'voucher_code');
        if (!$check) {
            return false;
        }
        $voucher = Voucher::where('code', $input['voucher_code'])->first();
        if (!$voucher) {
            return false;
        }
        //check voucher_code còn hạn hay hết hạn
        $checkVoucherExpired = $this->checkVoucherExpired($voucher);
        if (!$checkVoucherExpired) {
            $res['voucher_code'] = $voucher->code;
            $res['voucher_end_time'] = $voucher->end_time;
            $res['voucher_expired'] = PromotionDataConst::VOUCHER_EXPIRED;
            return $res;
        }
        //check số lượng voucher đã hết chưa
        $checkVoucherCount = $this->checkVoucherCount($voucher);
        if (!$checkVoucherCount) {
            $res['voucher_code'] = $voucher->code;
            $res['voucher_quantity'] = $voucher->quantity;
            return $res;
        }
        //check voucher da su dung chua
        $checkVoucherNotUsed = $this->checkVoucherNotUsed($voucher);
        if (!$checkVoucherNotUsed) {
            $res['voucher_code'] = $voucher->code;
            $res['voucher_used'] =PromotionDataConst::VOUCHER_STATUS_USED;
            return $res;
        }
        $res = [];
        $res['voucher_id'] = $voucher->id;
        $res['voucher_name'] = $voucher->name;
        $res['voucher_start_time'] = $voucher->start_time;
        $res['voucher_end_time'] = $voucher->end_time;
        $res['voucher_money_promotion'] = $voucher->money_promotion;
        $res['voucher_percent_promotion'] = $voucher->percent_promotion;
        $res['voucher_quantity'] = $voucher->quantity;
        $res['voucher_code'] = $voucher->code;
        $res['voucher_status'] = $voucher->status;
        return $res;
    }
    
    public function voucherApplyCode($input)
    {
        $check = $this->checkCustomerLogin($input, 'voucher_code');
        if (!$check) {
            return false;
        }
        $res = $this->voucherCheckCode($input);
        if (!$res) {
            return false;
        }
        $voucher = Voucher::where('code', $input['voucher_code'])->first();
        //giảm số lượng hiện tại trong voucher
        $voucher->update(['quantity' => $voucher->quantity - 1]);
        //update status voucher
        $voucher->update(['status' => PromotionDataConst::VOUCHER_STATUS_USED]);
        $res['voucher_id'] = $voucher->id;
        $res['voucher_code'] = $voucher->code;
        $res['voucher_name'] = $voucher->name;
        $res['voucher_money_promotion'] = $voucher->money_promotion;
        $res['voucher_percent_promotion'] = $voucher->percent_promotion;
        return $res;
    }
    
    
    
}
