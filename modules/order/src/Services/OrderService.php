<?php
namespace APV\Order\Services;

use APV\Order\Models\Order;
use APV\Order\Models\OrderProduct;
use APV\Order\Models\OrderProductTopping;
use APV\Table\Models\Table;
use APV\Order\Constants\OrderDataConst;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class OrderService extends BaseService
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function getTableByQrCode($tableQrCode, $field = null)
    {
        $table = Table::where('qr_code', $tableQrCode)->first();
        if (!$table) {
            return null;
        }
        if ($field) {
            return $table->$field;
        }
        return $table;
    }

    public function createOrderProductTopping($orderProductId, $arrayTopping)
    {
        $result = [];
        if (count($arrayTopping) == 0) {
            return $result;
        }
        $data = [];
        $data['order_product_id'] = $orderProductId;
        $orderProduct = OrderProduct::find($orderProductId);
        foreach ($arrayTopping as $key => $topping) {
            $data['topping_id'] = $topping['topping_id'];
            $data['topping_price'] = $topping['topping_price'];
            $data['product_id'] = $orderProduct->product_id;
            $data['order_id'] = $orderProduct->order_id;
            $result[] = OrderProductTopping::create($data)->id;
        }
        return $result;
    }

    public function postCreateOrder($input)
    {
        $order = [];
        $order['table_qr_code'] = $input['table_qr_code'];
        $order['status'] = $input['status'];
        $order['customer_id'] = $input['customer_id'];
        $order['comment'] = $input['comment'];
        $order['created_by'] = getIdOrderCreatedBy();
        $order['order_type_id'] = $input['order_type_id'];
        $order['ship_price'] = $input['ship_price'];
        $order['ship_id'] = $input['ship_id'];
        $order['total_product_price'] = $input['total_product_price'];
        $order['total_topping_price'] = $input['total_topping_price'];
        $order['amount'] = $input['amount'];
        $orderId = Order::create($order)->id;
        if (!$orderId) {
            return false;
        }
        return $orderId;
    }

    public function postCreateOrderProduct($orderId, $input)
    {
        $orderProduct = [];
        $orderProduct['order_id'] = $orderId;
        $orderProduct['status'] = $input['status'];
        $orderProduct['customer_id'] = $input['customer_id'];
        $orderProduct['table_id'] = $this->getTableByQrCode($input['table_qr_code'], 'id');
        $orderProduct['table_qr_code'] = $input['table_qr_code'];
        $orderProduct['level_id'] = $this->getTableByQrCode($input['table_qr_code'], 'id');;
        $orderProduct['ship_id'] = $input['ship_id'];
        $listProduct = $input['list_product'];
        foreach ($listProduct as $key => $product) {
            $orderProduct['product_id'] = $product['product_id'];
            $orderProduct['quantity'] = $product['quantity'];
            $orderProduct['size_id'] = $product['size_id'];
            $orderProduct['product_price'] = $product['product_price'];
            $orderProduct['price'] = $product['price'];
            $orderProduct['total_price'] = $product['total_price'];
            $orderProduct['total_price_topping'] = $product['total_price_topping'];
            $result['order_product'][] = $orderProductId = OrderProduct::create($orderProduct)->id;
            $result['order_product_topping'][] = $this->createOrderProductTopping($orderProductId, $product['topping']);
        }
        return $result;
    }

    public function postCreate($input)
    {
        if (count($input['list_product']) == 0) {
            return false;
        }
        // dd($input['list_product']);
        //tao order
        $orderId = $this->postCreateOrder($input);
        if (!$orderId) {
            return false;
        }
        //tao order_product
        $orderProducts = $this->postCreateOrderProduct($orderId, $input);
        // dd($input);
        // if (!$data) {
        //     return false;
        // }
        //tao ra mã phiếu cho đơn hàng: orderBill
        $data = renderCodeOrderTmp($orderId);
        return $data;
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

}
