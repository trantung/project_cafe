<?php

namespace APV\Product\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class ProductDataConst
 * @package APV\Product\Constants
 */
class ProductDataConst extends BaseDataConst
{
    const PRODUCT_STATUS = [
        'ACTIVE' => 1,
        'INACTIVE' => 0,
    ];

    const PRODUCT_SHOW_HOME_PAGE = [
        'SHOW' => 1,
        'NOT_SHOW' => 0,
    ];

    const NEW_PRODUCT_QUANTITY = 20;

    const SEED_PRODUCT_QUANTITY = 1000;

    const MAX_QUANTITY_PRODUCT_CATEGORY = 20;

    const SEED_PRODUCT_IMAGE_QUANTITY = 2000;

    const PRODUCT_PER_PAGE = 20;
    //product using_atlượng 1: chỉ được dùng ở quầy, 2: có thẻ ship mang đi, 3: tất cả có thể dùng ở quầy hoặc mang đi ....
    const PRODUCT_USING_AT_SHOP = 1;
    const PRODUCT_USING_AT_SHIP = 2;
    const PRODUCT_USING_AT_ALL = 3;

    const PRODUCT_CANCEL_BY_CUSTOMER_TRUE = 1;
    const PRODUCT_CANCEL_BY_CUSTOMER_FALSE = 0;
    //xoa sp khoi gio hang
    const PRODUCT_REMOVE_CART = 1;
}
