<?php
use APV\Order\Models\OrderBill;
use APV\Order\Constants\OrderDataConst;
use Illuminate\Support\Facades\Auth;

function renderCodeOrderTmp($orderId)
{
    $orderBill = OrderBill::where('order_id', $orderId)->first();
    if (!$orderBill) {
        $orderBillId = OrderBill::create(['order_id'=>$orderId])->id;
        $data = OrderBill::find($orderBillId);
        $data->update(['code' => $orderBillId]);
        return $data->code;
    }
    return $orderBill->code;
}

function getUserIdLogin()
{
    $user = Auth::user();
    if (!$user) {
        return null;
    }
    return $user->id;
}

function getIdOrderCreatedBy()
{
    return getUserIdLogin();
}

function getIdOrderUpdatedBy($status)
{
    if ($status == OrderDataConst::ORDER_TYPE_AT_SHOP) {
        $updatedById = getUserIdLogin();
        return $updatedById;
    }
    return null;
}