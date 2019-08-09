<?php
use APV\Order\Models\OrderBill;

function renderCodeOrderTmp($orderId)
{
    $orderBill = OrderBill::where('order_id', $orderId)->first();
    if (!$orderBill) {
        $orderBillId = OrderBill::create(['order_id', $orderId])->id;
        $data = OrderBill::find($orderBillId);
        $data->update(['code' => $orderBillId]);
        return $data->code;
    }
    return $orderBill->code;
}