<?php

namespace APV\Hocmai\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class ProductDataConst
 * @package APV\Product\Constants
 */
class HocmaiDataConst extends BaseDataConst
{
    const IOS = 1;
    const ANDROID = 2;
    const ANOTHER = 3;

    const ANDROID_LENGTH = 152;
    const IOS_LENGTH = 64;
    //type_id
    const TYPE_OPTION = 1;
    const TYPE_STRING = 2;
    const TYPE_DATE = 3;
    //operator
    //id = 1
    const OPERATOR_GREATER = '>';
    //id = 2
    const OPERATOR_LESS = '<';
    //id = 3
    const OPERATOR_GREATER_EQUAL = '>=';
    //id = 4
    const OPERATOR_LESS_EQUAL = '<=';
    //id = 5
    const OPERATOR_EQUAL = '=';
    //id = 6
    const OPERATOR_NOT_EQUAL = '!=';

    //firebase api access key
    const API_ACCESS_KEY = 'AAAANlBfKMs:APA91bGgy7i0mrkcvtubZV-0uVI-czC0-gQJEdYNkq4yeakFHq-De1iAk0cf43FvBAtzK9h_Yej03YemlNHos0X7kj4R5vEVVnh7PC5dMM09S3XIEdX6DyfSTyzzZs8Yi4MpY9gJaPTB';

    //status notify
    //update success to firebase
    const UPLOAD_FIREBASE_SUCCESS = 1;

    const BEFORE_SENT = 1;
    const SENT_FAIL = 2;
    const SENT_SUCCESS = 3;
    const API_SYNC = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiMTIzMjk3OSIsInVzZXJuYW1lIjoiaG9jbWFpLmtpdGh1YXQiLCJmaXJzdF9uYW1lIjoiS2l0aHVhdCIsImxhc3RfbmFtZSI6IkhvY21haSIsImlhdCI6MTYwMTg5MjIzMywiZXhwIjoxNjAyNDk3MDMzfQ.FpofakgBIQYFdVZFbbl-tVjpAI2RMrgphxiIWA-IBHI';
}
