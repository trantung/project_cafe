<?php

namespace APV\Material\Constants;

use APV\Base\Constants\BaseResponseCode;

/**
 * Class LevelResponseCode
 * @package APV\Material\Constants
 */
class MaterialResponseCode extends BaseResponseCode
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 601,
        'message' => 'Cannot create Material',
    ];
    const ERROR_CODE_DETAIL = [
        'code' => 602,
        'message' => 'Cannot get detail Material',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 603,
        'message' => 'Cannot edit Material',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 604,
        'message' => 'Cannot delete Material',
    ];
       

}
