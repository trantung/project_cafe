<?php

namespace APV\Product\Constants;

use APV\Base\Constants\BaseResponseCode;

/**
 * Class ProductResponseCode
 * @package APV\Product\Constants
 */
class ProductResponseCode extends BaseResponseCode
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];

    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 600,
        'message' => 'create new product error',
    ];

    
}
