<?php

namespace APV\Shop\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class UserDataConst
 * @package APV\User\Constants
 */
class ShopDataConst extends BaseDataConst
{
    const USER_STATUS = [
        'ACTIVATED' => 1,
        'UNACTIVATED' => 0,
    ];

    const RECEIVE_NEW = [
        'YES' => 1,
        'NO' => 0,
    ];

    const MAIL_SUBJECT = [
        'VERIFY_EMAIL' => 'Verification email',
        'RESET_PASSWORD' => 'Reset password request',
    ];

    const USER_GENDER = [
        'MALE'   => 0,
        'FEMALE' => 1,
    ];
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_CREATE = [
        'code' => 800,
        'message' => 'Error when create shop',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 801,
        'message' => 'Error when edit shop',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 802,
        'message' => 'Error when delete shop',
    ];
    
    
}
