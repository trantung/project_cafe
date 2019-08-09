<?php

namespace APV\Order\Constants;

use APV\Base\Constants\BaseResponseCode;

/**
 * Class LevelResponseCode
 * @package APV\Order\Constants
 */
class OrderResponseCode extends BaseResponseCode
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 601,
        'message' => 'Cannot create Order',
    ];
    const ERROR_CODE_DETAIL = [
        'code' => 602,
        'message' => 'Cannot get detail Order',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 603,
        'message' => 'Cannot edit Order',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 604,
        'message' => 'Cannot delete Order',
    ];
       

}
