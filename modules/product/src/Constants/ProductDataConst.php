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
}
