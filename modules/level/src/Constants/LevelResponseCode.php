<?php

namespace APV\Level\Constants;

use APV\Base\Constants\BaseResponseCode;

/**
 * Class LevelResponseCode
 * @package APV\Level\Constants
 */
class LevelResponseCode extends BaseResponseCode
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 701,
        'message' => 'Cannot create level',
    ];
    const ERROR_CODE_DETAIL = [
        'code' => 702,
        'message' => 'Cannot get detail level',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 703,
        'message' => 'Cannot edit level',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 704,
        'message' => 'Cannot delete level',
    ];
       

}
