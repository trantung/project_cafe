<?php
namespace APV\Order\Services;

use APV\Order\Models\Order;
// use APV\Order\Models\OrderType;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class OrderService extends BaseService
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function postCreate($input)
    {
        //param: name, statuss
        $orderId = Order::create($input)->id;
        if (!$orderId) {
            return false;
        }
        return $orderId;
    }

    public function getList()
    {
        $data = Order::all();
        return $data->toArray();
    }

    public function getDetail($orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return false;
        }
        return $order->toArray();
    }

    public function postEdit($orderId, $input)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return false;
        }
        $order->update($input);
        return true;
    }

    public function postDelete($orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return false;
        }
        Order::destroy($orderId);
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
