<?php

namespace APV\User\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class UserDataConst
 * @package APV\User\Constants
 */
class UserDataConst extends BaseDataConst
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

    const USER_REASON_TO_LEAVE = [
        'NOT_FOUND_PRODUCT' => 'NOT_FOUND_PRODUCT',
        'NOT_SATISFIED_PRODUCT' => 'NOT_SATISFIED_PRODUCT',
        'DIFFICULT_USE' => 'DIFFICULT_USE',
        'NO_USE' => 'NO_USE',
        'MAIL' => 'MAIL',
        'DELETE_INFO' => 'DELETE_INFO',
        'SUPPORT' => 'SUPPORT',
        'TROUBLES' => 'TROUBLES',
        'OTHERS' => 'OTHERS',
    ];

    const USER_INIT_POINT = 5000;

    const USER_CHANGE_POINT = [
        'MINUS' => 0,
        'ADD' => 1,
    ];
}
