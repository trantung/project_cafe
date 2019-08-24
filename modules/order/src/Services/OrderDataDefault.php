<?php
namespace APV\Order\Services;

use APV\Base\Services\BaseService;
use APV\Order\Constants\OrderDataConst;

class OrderDataDefault extends BaseService
{
    public function dataPostCreate()
    {
        $data = '
            {
                "table_qr_code": "Awu2QadmP3T6qLDG",
                "customer_id": "1",
                "comment": "comment so 1",
                "created_by": 1,
                "updated_by": 1,
                "status": 1,
                "list_product": [
                    {
                        "product_id": 1,
                        "quantity": 1,
                        "size_id": 1,
                        "topping": [
                            {
                                "topping_id": 1,
                                "topping_price": 10000
                            },
                            {
                                "topping_id": 2,
                                "topping_price": 15000
                            }
                        ],
                        "price": 100000,
                        "product_price": 100000,
                        "total_price_topping": 25000,
                        "total_price": 225000
                    },
                    {
                        "product_id": 3,
                        "quantity": 1,
                        "size_id": 3,
                        "topping": [],
                        "price": 200000,
                        "product_price": 200000,
                        "total_price_topping": 0,
                        "total_price": 200000
                    },
                    {
                        "product_id": 1,
                        "quantity": 1,
                        "size_id": 2,
                        "topping": [],
                        "price": 300000,
                        "product_price": 300000,
                        "total_price_topping": 0,
                        "total_price": 300000
                    }
                ],
                "total_topping_price":25000,
                "total_product_price":700000,
                "order_type_id":1,
                "ship_price": "",
                "ship_id":"",
                "amount": 725000
            }
        ';
        return $data;
    }    
    public function dataPostDetail()
    {
        $data = '
            {
                "customer": [
                    "customer_name":"tran thanh tung",
                    "customer_id":1
                ],
                "table":[
                    "table_name":"ban so 1",
                    "table_qr_code":"121sasas"
                ],
                "order_detail":[
                    "list_product": [
                        [
                            "product_id": 1,
                            "product_name":"san pham",
                            "quantity": 1,
                            "size_id": 1,
                            "size_name":"S",
                            "topping": [
                                [
                                    "topping_id": 1,
                                    "topping_price": 10000
                                ],
                                [
                                    "topping_id": 2,
                                    "topping_price": 15000
                                ]
                            ],
                            "price": 100000,
                            "product_price": 100000,
                            "total_price_topping": 25000,
                            "total_price": 225000
                        ],
                        [
                            "product_id": 3,
                            "product_name":"san pham",
                            "quantity": 1,
                            "size_id": 3,
                            "size_name":"M",
                            "topping": [],
                            "price": 200000,
                            "product_price": 200000,
                            "total_price_topping": 0,
                            "total_price": 200000
                        ],
                        [
                            "product_id": 1,
                            "product_name":"san pham",
                            "quantity": 1,
                            "size_id": 2,
                            "size_name":"L",
                            "topping": [],
                            "price": 300000,
                            "product_price": 300000,
                            "total_price_topping": 0,
                            "total_price": 300000
                        ]
                    ],
                    "order_common":[
                        "bill_code": "1",
                        "comment": "comment so 1",
                        "created_by": [
                            "created_by_id":1,
                            "created_by_name":"tran thanh tung"
                        ],
                        "updated_by": [
                            "updated_by_id":1,
                            "updated_by_name":"tran thanh tung"
                        ],
                        "status": 1,
                        
                        "total_topping_price":25000,
                        "total_product_price":700000,
                        "order_type_id":1,
                        "order_type_name":"Tai shop",
                        "ship_price": "",
                        "ship_id":"",
                        "ship_name":"",
                        "amount": 725000,
                        "bill_order":1
                    ]
                ]
            }
        ';
        return $data;
    }

    public static function dataDefaultOrderType($orderTypeId = null)
    {
        $data = [
            OrderDataConst::ORDER_TYPE_AT_SHOP => 'Phục vụ tại cửa hàng',
            OrderDataConst::ORDER_TYPE_TAKE_AWAY => 'Mang về',
            OrderDataConst::ORDER_TYPE_SHIP => 'Ship hàng'
        ];
        if (!$orderTypeId) {
            return [];
        }
        if (!$data[$orderTypeId]) {
            return [];
        }
        return $data[$orderTypeId];
    }

    public static function dataDefaultOrderStatus($status = null)
    {
        $data = [
            OrderDataConst::ORDER_STATUS_CANCEL => 'Hủy đơn',
            OrderDataConst::ORDER_STATUS_CREATED => 'Đơn hàng mới',
            OrderDataConst::ORDER_STATUS_CONFIRM_KITCHENT => 'Bếp confirm',
            OrderDataConst::ORDER_STATUS_DELETE => 'Xóa đơn',
        ];
        if (!$status) {
            return $data;
        }
        if (!$data[$status]) {
            return [];
        }
        return $data[$status];
    }

    public static function ruleConditionOrder()
    {
        $data = ['level_id', 'customer_phone', 'number_waitting'];
        return $data;
    }

}
