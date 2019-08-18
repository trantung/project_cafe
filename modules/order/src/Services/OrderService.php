<?php
namespace APV\Order\Services;

use APV\Order\Models\Order;
use APV\Order\Models\OrderProduct;
use APV\Order\Models\OrderProductTopping;
use APV\Order\Models\OrderLog;
use APV\Table\Models\Table;
use APV\Customer\Models\Customer;
use APV\Topping\Models\Topping;
use APV\User\Models\User;
use APV\Order\Models\OrderBill;
use APV\Order\Constants\OrderDataConst;
use APV\Base\Services\BaseService;
use APV\Product\Services\ProductService;
use APV\Size\Services\SizeService;
use APV\Topping\Services\ToppingService;
use APV\Order\Services\OrderDataDefault;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class OrderService extends BaseService
{
    public function __construct(Order $model, ProductService $productService, SizeService $sizeService, ToppingService $toppingService)
    {
        parent::__construct($model);
        $this->productService = $productService;
        $this->sizeService = $sizeService;
        $this->toppingService = $toppingService;
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
        $customer = Customer::find($input['customer_id']);
        if (!$customer) {
            return false;
        }
        $order['table_qr_code'] = $input['table_qr_code'];
        $order['table_id'] = $this->getTableByQrCode($input['table_qr_code'], 'id');
        $order['level_id'] = $this->getTableByQrCode($input['table_qr_code'], 'level_id');
        $order['status'] = $input['status'];
        $order['customer_id'] = $input['customer_id'];
        $order['customer_name'] = $customer->customer_name;
        $order['customer_phone'] = $customer->customer_phone;
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
        $orderProduct['level_id'] = $this->getTableByQrCode($input['table_qr_code'], 'level_id');
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
        //tham khao tai: OrderDataDefault::dataPostCreate()
        if (count($input['list_product']) == 0) {
            return false;
        }
        //tao order
        $orderId = $this->postCreateOrder($input);
        if (!$orderId) {
            return false;
        }
        //tao order_product
        $orderProducts = $this->postCreateOrderProduct($orderId, $input);
        //tao ra mã phiếu cho đơn hàng: orderBill
        $numberWaitting = renderCodeOrderTmp($orderId);
        // $data = $this->getDetail($orderId);
        $data['order_id'] = $orderId;
        $data['number_waitting'] = $numberWaitting;
        return $data;
    }

    public function getOrderByCondition($condition = null)
    {
        if(isset($condition['date']) && ($condition['date'] == 'now')) {
            $data = Order::whereDate('created_at', '=', date('Y-m-d'))->get();
            return $data;
        }
        if (!$condition) {
            $data = Order::all();
            return $data;
        }
        $data = Order::where($condition)->get();
        return $data;
    }

    public function getOrderList($condition = null)
    {
        $data = [];
        $orders = $this->getOrderByCondition($condition);
        foreach ($orders as $key => $order) {
            $data[] = $this->getDetail($order->id);
        }
        return $data;
    }

    public function getList($input)
    {
        $data = $this->getOrderList($input);
        return $data;
    }

    public function getListSearch($condition)
    {
        $ruleConditionOrder = OrderDataDefault::ruleConditionOrder();
        if (!isset($condition)) {
            return $this->getOrderList();
        }
        foreach ($condition as $key => $value) {
            if (!in_array($key, $ruleConditionOrder)) {
                return false;
            }
        }
        $data = $this->getOrderList($condition);
        if (!$data) {
            return [OrderDataConst::NO_ORDER];
        }
        return $data;
    }

    public function getDetail($orderId)
    {
        //tham khao tai: OrderDataDefault::dataPostDetail()
        $order = Order::find($orderId);
        $data = [];
        $data['customer'] = $this->getCustomerByOrder($order);
        $data['table'] = $this->getTableByOrder($order);
        $data['order_detail']['order_common'] = $this->getOrderCommon($order);
        $data['order_detail']['list_product'] = $this->getListProductByOrder($order);
        $data['number_waitting'] = OrderBill::getCode($order->id);
        return $data;
    }

    public function confirmByKitchent($order)
    {
        $status = $order->status;
        if ($status == OrderDataConst::ORDER_STATUS_CONFIRM_KITCHENT) {
            return true;
        }
        return false;
    }
    public function postEdit($orderId, $input)
    {

        $orderOld = Order::find($orderId);
        if (!$orderOld) {
            return false;
        }
        //check bếp đã confirm là làm order đấy chưa. nếu confirm làm rồi thì ko cho edit
        $kitchentConfirm = $this->confirmByKitchent($order);
        if ($kitchentConfirm) {
            return false;
        }
        //Create new order
        $data = $this->postCreate($input);
        $orderNewId = $data['order_id'];
        //Save log
        $orderOldData = $this->getDetail($orderId);
        OrderLog::create([
            'order_new_id' => $orderNewId, 
            'order_new_created_by' => getIdOrderCreatedBy(),
            'order_old_id' => $orderOld->id, 
            'order_old_data' => $orderOldData,
            'order_old_created_by' => $orderOld->created_by,
        ]);
        //Destroy
        $this->postDelete($orderId);
        return $data;
    }

    public function postDelete($orderId)
    {
        OrderProductTopping::where('order_id', $orderId)->delete();
        OrderProduct::where('order_id', $orderId)->delete();
        Order::destroy($orderId);
    }

    public function getCustomerByOrder($order)
    {
        $data = [];
        $customerId = $order->customer_id;
        $customer = Customer::find($customerId);
        if (!$customer) {
            return $data;
        }
        $data['customer_name'] = $customer->name;
        $data['customer_id'] = $customer->id;
        return $data;
    }

    public function getTableByOrder($order)
    {
        $data = [];
        $tableId = $order->table_id;
        $table = Table::find($tableId);
        if (!$table) {
            return $data;
        }
        $data['table_name'] = $table->name;
        $data['table_qr_code'] = $table->qr_code;
        return $data;
    }

    public function commonGetPersonActionOrder($order, $field = null)
    {
        $data = [];
        if (!$field) {
            return $data;
        }
        $user = User::find($order->$field);
        if (!$user) {
            return $data;
        }
        $data[$field. '_id'] = $user->id;
        $data[$field. '_name'] = $user->name;
        return $data;
    }

    public function getShipNameByOrder($order)
    {
        return '';
    }

    public function getOrderCommon($order)
    {
        $data['comment'] = $order->comment;
        $data['created_by'] = $this->commonGetPersonActionOrder($order, 'created_by');
        $data['updated_by'] = $this->commonGetPersonActionOrder($order, 'updated_by');
        $data['status'] = $order->status;
        $data['status_name'] = OrderDataDefault::dataDefaultOrderStatus($order->status);
        $data['total_topping_price'] = $order->total_topping_price;
        $data['total_product_price'] = $order->total_product_price;
        $data['order_type_id'] = $order->order_type_id;
        $data['order_type_name'] = OrderDataDefault::dataDefaultOrderType($order->order_type_id);
        $data['ship_price'] = $order->ship_price;
        $data['ship_id'] = $order->ship_id;
        $data['ship_name'] = $this->getShipNameByOrder($order);
        $data['amount'] = $order->amount;
        return $data;
    }

    public function getToppingByOrderProduct($orderProduct)
    {
        $data = [];
        $listToppingId = OrderProductTopping::where('order_product_id', $orderProduct->id)->pluck('topping_id');
        $toppings = Topping::whereIn('id', $listToppingId)->get();
        foreach ($toppings as $key => $topping) {
            $data[$key]['topping_id'] = $topping->id;
            $data[$key]['topping_price'] = $topping->price;
        }
        return $data;
    }

    public function getListProductByOrder($order)
    {
        $data = [];
        $orderProducts = OrderProduct::where('order_id', $order->id)->get();
        foreach ($orderProducts as $key => $orderProduct) {
            $data[$key]['product_id'] = $orderProduct->product_id;
            $data[$key]['product_name'] = $this->productService->getDetail($orderProduct->product_id, 'name');
            $data[$key]['quantity'] = $orderProduct->quantity;
            $data[$key]['size_id'] = $orderProduct->size_id;
            $data[$key]['size_name'] = $this->sizeService->getDetail($orderProduct->size_id, 'name');
            $data[$key]['topping'] = $this->getToppingByOrderProduct($orderProduct);
            $data[$key]['price'] = $orderProduct->price;
            $data[$key]['product_price'] = $orderProduct->product_price;
            $data[$key]['total_price_topping'] = $orderProduct->total_price_topping;
            $data[$key]['total_price'] = $orderProduct->total_price;
        }
        return $data;
    }

    //Hủy đơn: chưa có luồng business
    public function postCancel($orderId)
    {
        return true;
    }

    public function postChangeStatusOrder($orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return false;
        }
        $order->update(['status' => OrderDataConst::ORDER_STATUS_CONFIRM_KITCHENT]);
        return true;
    }

}
