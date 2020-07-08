<?php

namespace APV\Order\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class OrderDataConst
 * @package APV\Table\Constants
 */
class OrderDataConst extends BaseDataConst
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 1100,
        'message' => 'Create categories error',
    ];
    const PAGINATE = 1;
    //status order(dành cho nhân viên):0: hủy, 1: tạo mới do nhân viên, 2: xác nhận bếp, 3: thu ngân xác nhận, 4: xóa, 5 :Khách hàng đặt
    const ORDER_STATUS_CANCEL = 0;
    const ORDER_STATUS_CREATED = 1;
    const ORDER_STATUS_CONFIRM_KITCHENT = 2;
    const ORDER_STATUS_CONFIRM_CASHIER = 3;
    const ORDER_STATUS_DELETE = 4;

    const ORDER_STATUS_CUSTOMER_CREATED = 5;
    const ORDER_STATUS_CUSTOMER_FINISH = 6;
    const ORDER_STATUS_CUSTOMER_CANCEL = 7;
    //order_type_id: 1:tai shop, 2: take away, 3: ship, 4: khách hàng(customer) đặt qua app
    const ORDER_TYPE_AT_SHOP = 1;
    const ORDER_TYPE_TAKE_AWAY = 2;
    const ORDER_TYPE_SHIP = 3;
    const ORDER_TYPE_CUSTOMER_APP = 4;
    //
    const NO_ORDER = 'Have no order';
    const ORDER_NUMBER_WAITTING = 'number_waitting';
    //customer default for order
    const DEFAULT_CUSTOMER_ID = 1;
    const DEFAULT_CUSTOMER_NAME = 'cavoisatthu';
    const DEFAULT_CUSTOMER_PHONE = '0912957368';
    //order use: đôi với product_using_at = 1(tại quán) 1:sử dụng tại quán, 2: mang đi, product_using_at = 2(ship tận nơi) 3: Tôi dùng, 4: Mua tặng
    const ORDER_USE_USING_AT_1_SHOP = 1;
    const ORDER_USE_USING_AT_2_SHIP = 2;
    const ORDER_USE_USING_AT_2_OWNER = 3;
    const ORDER_USE_USING_AT_2_GIFT = 4;
}
