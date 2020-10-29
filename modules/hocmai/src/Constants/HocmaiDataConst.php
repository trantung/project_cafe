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

    //thời gian gửi notify
    //gửi luôn
    const SCHEDULE_NOW = 1;
    //Chọn ngày giờ(Hẹn giờ gửi)
    const SCHEDULE_TIMER = 2;
    //Daily
    const SCHEDULE_DAILY = 3;

    //firebase api access key
    const API_ACCESS_KEY = 'AAAANlBfKMs:APA91bGgy7i0mrkcvtubZV-0uVI-czC0-gQJEdYNkq4yeakFHq-De1iAk0cf43FvBAtzK9h_Yej03YemlNHos0X7kj4R5vEVVnh7PC5dMM09S3XIEdX6DyfSTyzzZs8Yi4MpY9gJaPTB';

    //status notify
    const SAVE_NOT_SENT = 2;
    //update success to firebase
    const UPLOAD_FIREBASE_SUCCESS = 1;

    const BEFORE_SENT = 1;
    const SENT_FAIL = 2;
    const SENT_SUCCESS = 3;
    const API_SYNC = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiNDk5NDQwNyIsInVzZXJuYW1lIjoiMDk3OTMxMDIwNyIsImZpcnN0X25hbWUiOiIwOTc5MzEwMjA3IiwibGFzdF9uYW1lIjoiIiwiaWF0IjoxNjAyNjAyMDA5LCJleHAiOjE2MDMyMDY4MDl9.7W4BLcsNtXFxu1uxQeQLPMMuu-aL8oTKOdtiE1x4tZo';
}
