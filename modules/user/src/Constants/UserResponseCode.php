<?php

namespace APV\User\Constants;

use APV\Base\Constants\BaseResponseCode;

/**
 * Class UserResponseCode
 * @package APV\User\Constants
 */
class UserResponseCode extends BaseResponseCode
{
    const ERROR_CODE_UNAUTHENTICATED = [
        'code' => 902,
        'message' => 'Unauthenticated',
    ];

    const ERROR_CODE_PASSWORD_WRONG = [
        'code' => 903,
        'message' => [
            'password' => ['The password is not correct'],
        ],
    ];

    const ERROR_CODE_DELETED_ACCOUNT = [
        'code' => 904,
        'message' => 'Your account is deleted',
    ];

    const ERROR_CODE_INACTIVE_ACCOUNT = [
        'code' => 905,
        'message' => 'Your account is unactivated',
    ];

    const ERROR_CODE_PASSWORD_SAME_AS_USERNAME = [
        'code' => 906,
        'message' => [
            'password' => ['The password and username must be different'],
        ],
    ];

    const ERROR_CODE_SEND_EMAIL_VERIFY_FAILED = [
        'code' => 907,
        'message' => 'Sending email for authentication failed',
    ];

    const ERROR_CODE_EMAIL_VERIFIED = [
        'code' => 908,
        'message' => 'This email has been verified',
    ];

    const ERROR_CODE_EMAIL_VERIFY_FAILED = [
        'code' => 909,
        'message' => 'Verify email failed',
    ];

    const ERROR_CODE_SEND_EMAIL_RESET_PASSWORD_FAILED = [
        'code' => 910,
        'message' => 'Send email reset password failed',
    ];

    const ERROR_CODE_RESET_PASSWORD_TOKEN_INVALID = [
        'code' => 911,
        'message' => 'This password reset token is invalid',
    ];

    const ERROR_CODE_PASSWORD_NO_CHANGE = [
        'code' => 912,
        'message' => [
            'password' => ['New password must different the old one'],
        ],
    ];

    const ERROR_CODE_OLD_PASSWORD_WRONG = [
        'code' => 913,
        'message' => [
            'password' => ['The old password is not correct'],
        ],
    ];

    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];

    const ERROR_CODE_TOKEN_LEAVING_INVALID = [
        'code' => 915,
        'message' => 'This token leaving is invalid',
    ];

    const ERROR_CODE_EXPIRATION_INVALID  = [
        'code' => 916,
        'message' => 'Expiration date must not be sooner than current time',
    ];

    const ERROR_CODE_NAME_WRONG = [
        'code' => 917,
        'message' => [
            'first_name' => ['Your first name or last name is different from what registered with us'],
        ],
    ];
    const ERROR_CODE_USERNAME_EXIST = [
        'code' => 918,
        'message' => [
            'first_name' => ['username is exist'],
        ],
    ];
    const ERROR_CODE_USER_NOT_FOUND = [
        'code' => 919,
        'message' => 'User not found to delete',
    ];
}
