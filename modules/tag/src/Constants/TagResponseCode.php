<?php

namespace APV\Tag\Constants;

use APV\Base\Constants\BaseResponseCode;

/**
 * Class LevelResponseCode
 * @package APV\Tag\Constants
 */
class TagResponseCode extends BaseResponseCode
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 100,
        'message' => 'Cannot create Tag',
    ];
    const ERROR_CODE_DETAIL = [
        'code' => 103,
        'message' => 'Cannot get detail Tag',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 101,
        'message' => 'Cannot edit Tag',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 102,
        'message' => 'Cannot delete Tag',
    ];
       

}
