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
            $res[$key]['voucher_is_use'] = $this->commonCheckVoucherActive($voucher);
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
        $res['voucher_is_use'] = $this->commonCheckVoucherActive($voucher);
        return $res;
    }
    public function commonCheckVoucherActive($voucher)
    {
        $checkVoucherExpired = $this->checkVoucherExpired($voucher);
        $checkVoucherCount = $this->checkVoucherCount($voucher);
        $checkVoucherNotUsed = $this->checkVoucherNotUsed($voucher);
        if (!$checkVoucherExpired || !$checkVoucherCount || !$checkVoucherNotUsed) {
            return PromotionDataConst::VOUCHER_IS_INACTIVE;
        }
        return PromotionDataConst::VOUCHER_IS_ACTIVE;
    }
    //to-do
    public function checkVoucherExpired($voucher)
    {
        $now = date('Y-m-d H:i:s');
        $endTime = $voucher->end_time;
        if (strtotime($now) > strtotime($endTime)) {
            return false;
        }
        return true;
    }
    public function checkVoucherCount($voucher)
    {
        if ($voucher->quantity < 1) {
            return false;
        }
        return true;
    }
    public function checkVoucherNotUsed($voucher)
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
            $res['voucher_is_use'] = PromotionDataConst::VOUCHER_IS_INACTIVE;
            $res['voucher_end_time'] = $voucher->end_time;
            $res['voucher_expired'] = PromotionDataConst::VOUCHER_EXPIRED;
            return $res;
        }
        //check số lượng voucher đã hết chưa
        $checkVoucherCount = $this->checkVoucherCount($voucher);
        if (!$checkVoucherCount) {
            $res['voucher_code'] = $voucher->code;
            $res['voucher_is_use'] = PromotionDataConst::VOUCHER_IS_INACTIVE;
            $res['voucher_quantity'] = $voucher->quantity;
            return $res;
        }
        //check voucher da su dung chua
        $checkVoucherNotUsed = $this->checkVoucherNotUsed($voucher);
        if (!$checkVoucherNotUsed) {
            $res['voucher_code'] = $voucher->code;
            $res['voucher_is_use'] = PromotionDataConst::VOUCHER_IS_INACTIVE;
            $res['voucher_used'] = PromotionDataConst::VOUCHER_STATUS_USED;
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
    //param: voucher_code, amount_after_promotion. res: trả về tổng tiền sau khi ap dung voucher
    public function voucherApplyCode($input)
    {
        $check = $this->checkCustomerLogin($input, 'voucher_code');
        if (!$check) {
            return false;
        }
        if (!isset($input['total_product_price'])) {
            return 'total_product_price is must have';
        }
        $total_product_price = $input['total_product_price'];
        $voucher = Voucher::where('code', $input['voucher_code'])->first();
        //giảm số lượng hiện tại trong voucher
        $voucher->update(['quantity' => $voucher->quantity - 1]);
        //update status voucher
        $voucher->update(['status' => PromotionDataConst::VOUCHER_STATUS_USED]);

        if (isset($voucher['percent_promotion'])) {
            $percentPromotion = $voucher['percent_promotion'];
            $promotionPrice = $total_product_price * $percentPromotion/100;
            $res['total_product_price'] = $total_product_price;
            $res['amount_after_promotion'] = $total_product_price - $promotionPrice;
            return $res;
        }
        if (isset($voucher['money_promotion'])) {
            $res['total_product_price'] = $total_product_price;
            $res['amount_after_promotion'] = $total_product_price - $voucher['money_promotion'];
            return $res;
        }

        $res['voucher_id'] = $voucher->id;
        $res['voucher_code'] = $voucher->code;
        $res['voucher_name'] = $voucher->name;
        $res['error'] = 'error';
        return $res;
    }

}
