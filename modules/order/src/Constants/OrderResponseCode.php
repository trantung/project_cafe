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
        'code' => 201,
        'message' => 'Cannot create Order',
    ];
    const ERROR_CODE_DETAIL = [
        'code' => 202,
        'message' => 'Cannot get detail Order',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 203,
        'message' => 'Cannot edit Order',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 204,
        'message' => 'Cannot delete Order',
    ];
    const ERROR_CODE_NOT_TABLE_EXIST = [
        'code' => 205,
        'message' => 'Cannot find table',
    ];
    const ERROR_CODE_CANCEL = [
        'code' => 206,
        'message' => 'Cannot cancel Order',
    ];
    const ERROR_CODE_SEARCH_ORDER = [
        'code' => 207,
        'message' => 'Error field send',
    ];
    const ERROR_CODE_CHANGE_STATUS_ORDER = [
        'code' => 208,
        'message' => 'Cannot change status',
    ];
    
    

}
