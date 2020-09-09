<?php
namespace APV\Hocmai\Services;

use APV\Hocmai\Models\HocmaiCourse;
use APV\Hocmai\Models\HocmaiLesson;
use APV\Hocmai\Models\HocmaiLessonUserLog;
use APV\Hocmai\Models\HocmaiNotify;
use APV\Hocmai\Models\HocmaiNotifyFilter;
use APV\Hocmai\Models\HocmaiLivestream;
use APV\Hocmai\Models\HocmaiNotifyProfile;
use APV\Hocmai\Models\HocmaiUser;
use APV\Hocmai\Models\HocmaiApp;
use APV\Hocmai\Models\HocmaiCity;
use APV\Hocmai\Constants\HocmaiDataConst;


class CommonService
{
    public function relationFilterWithTable()
    {

        $data = [
            //FIRST SESSION
            1 => [
                'filter_id' => 1,
                'table' => 'hocmai_users',
                'field' => 'first_login',
            ],
            //Last SESSION
            2 => [
                'filter_id' => 2,
                'table' => 'hocmai_users',
                'field' => 'last_login',
            ],
            //app version
            8 => [
                'filter_id' => 8,
                'table' => 'hocmai_apps',
                'field' => 'app_version',
                'table_relation' => 'hocmai_users',
                'table_child' => 'hocmai_user_app',
                'table_foreign_key' => 'hocmai_app_id',
                'table_relation_foreign_key' => 'user_id',
            ],
            //location
            10 => [
                'filter_id' => 10,
                'table' => 'hocmai_users',
                'field' => 'city_id',
            ],
            //user_id
            11 => [
                'filter_id' => 11,
                'table' => 'hocmai_users',
                'field' => 'hocmai_user_id',
            ],
            //user_phone
            12 => [
                'filter_id' => 12,
                'table' => 'hocmai_users',
                'field' => 'hocmai_user_id',
            ],
            //session count(number_open_app)
            13 => [
                'filter_id' => 13,
                'table' => 'hocmai_users',
                'field' => 'number_open_app',
            ],
            //last time open course
            14 => [
                'filter_id' => 14,
                'table' => 'hocmai_courses',
                'field' => 'last_time',
                'table_relation' => 'hocmai_users',
                'table_child' => 'hocmai_course_user_log',
                'table_foreign_key' => 'course_id',
                'table_relation_foreign_key' => 'user_id',
                'field_child' => 'last_time'
            ],
            //last lesson learning
            15 => [
                'filter_id' => 15,
                'table' => 'hocmai_lessons',
                'field' => 'id',
                'table_relation' => 'hocmai_users',
                'table_child' => 'hocmai_lesson_user_log',
                'table_foreign_key' => 'lesson_id',
                'table_relation_foreign_key' => 'user_id',
            ],
            //user class(class_id)
            16 => [
                'filter_id' => 16,
                'table' => 'hocmai_users',
                'field' => 'class_id',
            ],
            //user dob(birthday)
            17 => [
                'filter_id' => 17,
                'table' => 'hocmai_users',
                'field' => 'birthday',
            ],
            //user register time(register_time)
            18 => [
                'filter_id' => 18,
                'table' => 'hocmai_users',
                'field' => 'register_time',
            ],
            //AMOUNT COURSE IN MYCOURSE(count(course_id))
            20 => [
                'filter_id' => 20,
                'table' => 'hocmai_course_user',
            ],

        ];

        return $data;
    }

    public function getOperator()
    {
        $data = [
            1 => '>',
            2 => '<',
            3 => '>=',
            4 => '<=',
            5 => '=',
            6 => '!=',
        ];
        return $data;
    }
}