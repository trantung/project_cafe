<?php

namespace APV\Hocmai\Constants;

use APV\Base\Constants\BaseResponseCode;

class HocmaiResponseCode extends BaseResponseCode
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 1100,
        'message' => 'Cannot create Promotion',
    ];
    const ERROR_CODE_DETAIL = [
        'code' => 1103,
        'message' => 'Cannot get detail Promotion',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 1101,
        'message' => 'Cannot edit Promotion',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 1102,
        'message' => 'Cannot delete Promotion',
    ];
       

}
