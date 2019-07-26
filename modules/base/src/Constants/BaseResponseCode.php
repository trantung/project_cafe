<?php

namespace APV\Base\Constants;

/**
 * Class BaseResponseCode
 * @package APV\Base\Constants
 */
class BaseResponseCode
{
    const SUCCESS = 1000;

    const FAILURE = 900;

    const ERROR_CODE_VALIDATE_FAILED = [
        'code' => 900,
        'message' => 'Request invalid',
    ];

    const ERROR_CODE_SOMETHING_WENT_WRONG = [
        'code' => 901,
        'message' => 'Something went wrong',
    ];

    const ERROR_CODE_NOT_FOUND = [
        'code' => 918,
        'message' => 'Not found',
    ];
}
