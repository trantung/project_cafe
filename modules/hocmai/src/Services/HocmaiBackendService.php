<?php
namespace APV\Hocmai\Services;

use APV\Hocmai\Models\HocmaiCourse;
use APV\Hocmai\Models\HocmaiCourseUser;
use APV\Hocmai\Models\HocmaiDeviceUser;
use APV\Hocmai\Models\HocmaiLesson;
use APV\Hocmai\Models\HocmaiLessonUser;
use APV\Hocmai\Models\HocmaiLessonUserLog;
use APV\Hocmai\Models\HocmaiNotify;
use APV\Hocmai\Models\HocmaiNotifyFilter;
use APV\Hocmai\Models\HocmaiLivestream;
use APV\Hocmai\Models\HocmaiNotifyProfile;
use APV\Hocmai\Models\HocmaiUser;
use APV\Hocmai\Models\HocmaiApp;
use APV\Hocmai\Models\HocmaiCity;
use APV\Hocmai\Models\HocmaiNotifyContext;
use APV\Hocmai\Models\HocmaiNotifyDevice;
use APV\Hocmai\Models\HocmaiNotifyDeviceError;
use APV\Hocmai\Constants\HocmaiDataConst;
use \DB;

class HocmaiBackendService
{
    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
    }

    public function firstSession()
    {
        $data = [
            'filter_id' => 1,
            'filter_name' => 'First Session',
            'type_id' => HocmaiDataConst::TYPE_DATE,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                
            ],
        ];
        return $data;
    }

    public function lastSession()
    {
        $data = [
            'filter_id' => 2,
            'filter_name' => 'Last Session',
            'type_id' => HocmaiDataConst::TYPE_DATE,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                
            ],
        ];
        return $data;
    }

    public function getListAppVerison()
    {
        $res = [];
        $data = HocmaiApp::all();
        foreach ($data as $key => $value) {
            $res[$key]['option_id'] = $value->app_version;
            $res[$key]['option_name'] = $value->app_version;
        }
        return $res;
    }

    public function appVersion()
    {
        $data = [
            'filter_id' => 8,
            'filter_name' => 'App version',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                [
                    'id' => 3,
                    'name' => HocmaiDataConst::OPERATOR_GREATER_EQUAL,
                ],
                [
                    'id' => 4,
                    'name' => HocmaiDataConst::OPERATOR_LESS_EQUAL,
                ],
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
                [
                    'id' => 6,
                    'name' => HocmaiDataConst::OPERATOR_NOT_EQUAL,
                ],
            ],
            'option' => $this->getListAppVerison(),
        ];
        return $data;
    }

    public function getListCity()
    {
        $res = [];
        $data = HocmaiCity::all();
        foreach ($data as $key => $value) {
            $res[$key]['option_id'] = $value->id;
            $res[$key]['option_name'] = $value->name;
        }
        return $res;
    }
    
    public function location()
    {
        $data = [
            'filter_id' => 10,
            'filter_name' => 'Location',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
                [
                    'id' => 6,
                    'name' => HocmaiDataConst::OPERATOR_NOT_EQUAL,
                ],
            ],
            'option' => $this->getListCity(),
        ];
        return $data;
    }

    public function getListUserHocmai()
    {
        $res = [];
        $list = HocmaiUser::all();
        foreach ($list as $key => $value)
        {
            $res[$key]['option_id'] = $value->hocmai_user_id;
            $res[$key]['option_name'] = $value->name;
        }
        return $res;
    }

    public function getListUser()
    {
        $data = [
            'filter_id' => 11,
            'filter_name' => 'UserId',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ]
            ],
            'option' => $this->getListUserHocmai(),
        ];
        return $data;
    }

    public function getListPhoneHocmai()
    {
        $res = [];
        $list = HocmaiUser::all();
        foreach ($list as $key => $value)
        {
            $res[$key]['option_id'] = $value->hocmai_user_id;
            $res[$key]['option_name'] = $value->phone;
        }
        return $res;
    }

    public function getPhone()
    {
        $data = [
            'filter_id' => 12,
            'filter_name' => 'Phone number',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ]
            ],
            'option' => $this->getListPhoneHocmai(),
        ];
        return $data;
    }

    public function sessionCount()
    {
        $data = [
            'filter_id' => 13,
            'filter_name' => 'Session count',
            'type_id' => HocmaiDataConst::TYPE_STRING,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                [
                    'id' => 3,
                    'name' => HocmaiDataConst::OPERATOR_GREATER_EQUAL,
                ],
                [
                    'id' => 4,
                    'name' => HocmaiDataConst::OPERATOR_LESS_EQUAL,
                ],
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],

            ]
        ];
        return $data;
    }

    public function getOptionLastTimeOpenCourse()
    {
        $res = [];
        $list = [10,15];
        foreach ($list as $key => $value)
        {
            $res[$key]['option_id'] = $key;
            $res[$key]['option_name'] = $value . ' hours';
        }
        return $res;
    }

    public function lastTimeOpenCourse()
    {
        $data = [
            'filter_id' => 14,
            'filter_name' => 'LAST TIME OPEN COURSE',
            'type_id' => HocmaiDataConst::TYPE_STRING,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ]
            ],
        ];
        return $data;
    }

    public function getListLesson()
    {
        $res = [];
        $listLessonId = HocmaiLessonUserLog::pluck('lesson_id');
        $list = HocmaiLesson::whereIn('id', $listLessonId)->get();
        foreach ($list as $key => $value)
        {
            $res[$key]['option_id'] = $value->id;
            $res[$key]['option_name'] = $value->lesson_name;
        }
        return $res;
    }

    public function lastLessonLearning()
    {
        $data = [
            'filter_id' => 15,
            'filter_name' => 'LAST LESSON LEARNING',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ]
            ],
            'option' => $this->getListLesson(),
        ];
        return $data;
    }

    //Todo
    public function getListClass()
    {
        $res = [];
        $list = [
            'Lớp 1',
            'Lớp 2',
            'Lớp 3',
            'Lớp 4',
            'Lớp 5',
            'Lớp 6',
            'Lớp 7',
            'Lớp 8',
            'Lớp 9',
            'Lớp 10',
            'Lớp 11',
            'Lớp 12',
        ];
        foreach ($list as $key => $value)
        {
            $res[$key]['option_id'] = $key + 1;
            $res[$key]['option_name'] = $value;
        }
        return $res;
    }

    public function userClass()
    {
        $data = [
            'filter_id' => 16,
            'filter_name' => 'User Class',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                [
                    'id' => 3,
                    'name' => HocmaiDataConst::OPERATOR_GREATER_EQUAL,
                ],
                [
                    'id' => 4,
                    'name' => HocmaiDataConst::OPERATOR_LESS_EQUAL,
                ],
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
            ],
            'option' => $this->getListClass(),
        ];
        return $data;
    }

    public function userDob()
    {
        $data = [
            'filter_id' => 17,
            'filter_name' => 'User DOB',
            'type_id' => HocmaiDataConst::TYPE_DATE,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                [
                    'id' => 3,
                    'name' => HocmaiDataConst::OPERATOR_GREATER_EQUAL,
                ],
                [
                    'id' => 4,
                    'name' => HocmaiDataConst::OPERATOR_LESS_EQUAL,
                ],
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
            ]
        ];
        return $data;
    }

    public function userRegisterTime()
    {
        $data = [
            'filter_id' => 18,
            'filter_name' => 'User DOB',
            'type_id' => HocmaiDataConst::TYPE_DATE,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                [
                    'id' => 3,
                    'name' => HocmaiDataConst::OPERATOR_GREATER_EQUAL,
                ],
                [
                    'id' => 4,
                    'name' => HocmaiDataConst::OPERATOR_LESS_EQUAL,
                ],
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
            ]
        ];
        return $data;
    }

    public function amountCourseInMyCourse()
    {
        $data = [
            'filter_id' => 20,
            'filter_name' => 'AMOUNT COURSE IN MYCOURSE',
            'type_id' => HocmaiDataConst::TYPE_STRING,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                [
                    'id' => 3,
                    'name' => HocmaiDataConst::OPERATOR_GREATER_EQUAL,
                ],
                [
                    'id' => 4,
                    'name' => HocmaiDataConst::OPERATOR_LESS_EQUAL,
                ],
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
            ]
        ];
        return $data;
    }

    public function getFilterList($input)
    {
        $data = [
            $this->firstSession(),
            $this->lastSession(),
            $this->appVersion(),
            $this->location(),
            $this->getListUser(),
            $this->getPhone(),
            $this->sessionCount(),
            $this->lastTimeOpenCourse(),
            $this->lastLessonLearning(),
            $this->userClass(),
            $this->userDob(),
            $this->userRegisterTime(),
            $this->amountCourseInMyCourse(),
        ];
        return $data;
    }

    /**
     * Context list
     */
    public function getLessonListByCourse($courseId)
    {
        $res = [];
        $listLesson = HocmaiLesson::where('course_id', '=', $courseId)->get();
        foreach ($listLesson as $key => $value)
        {
            $res[$key]['lession_id'] = $value->hocmai_lesson_id;
            $res[$key]['lesson_name'] = $value->lesson_name;
        }
        return $res;
    }

    public function getListCourseDetail()
    {
        $res = [];
        $listCourse = HocmaiCourse::all();
        foreach ($listCourse as $key => $value)
        {
            $res[$key]['course_id'] = $value->hocmai_course_id;
            $res[$key]['course_name'] = $value->course_name;
            $res[$key]['lesson_list'] = $this->getLessonListByCourse($value->id);
        }
        return $res;
    }

    public function contextLogInCourse()
    {
        $data = [
            'id' => 1,
            'action_type' => 1,
            'action_name' => 'Truy cập khoá học',
            'data_list' => $this->getListCourseDetail(),
        ];
        return $data;
    }

    public function contextCommon($id, $actionType, $actionName)
    {
        $data = [
            'id' => $id,
            'action_type' => $actionType,
            'action_name' => $actionName,
        ];
        return $data;
    }

    public function contextLoginLivestream()
    {
        $data = [
            'id' => 15,
            'action_type' => 15,
            'action_name' => 'Truy cập vào kênh livestream',
            'data_list' => [
                [
                    'school_block_id' => 1,
                    'school_block_name' => 'TH',
                ],
                [
                    'school_block_id' => 2,
                    'school_block_name' => 'THCS',
                ],
                [
                    'school_block_id' => 3,
                    'school_block_name' => 'THPT',
                ],
            ]
        ];
        return $data;
    }

    public function getListLivestreamByBlock($schoolBlockId)
    {
        $res = [];
        $list = HocmaiLivestream::where('school_block_id', $schoolBlockId)->get();
        foreach ($list as $key => $value)
        {
            $res[$key]['livestream_id'] = $value->hocmai_livestream_id;
            $res[$key]['livestream_name'] = $value->name;
        }
        return $res;
    }
    public function contextLoginLivestreamDetail()
    {
        $data = [
            'id' => 16,
            'action_type' => 16,
            'action_name' => 'Truy cập vào cụ thể livestream',
            'data_list' => [
                [
                    'school_block_id' => 1,
                    'school_block_name' => 'TH',
                    'livestream_list' => $this->getListLivestreamByBlock(1),
                ],
                [
                    'school_block_id' => 2,
                    'school_block_name' => 'THCS',
                    'livestream_list' => $this->getListLivestreamByBlock(2),
                ],
                [
                    'school_block_id' => 3,
                    'school_block_name' => 'THPT',
                    'livestream_list' => $this->getListLivestreamByBlock(3),
                ],
            ]
        ];
        return $data;
    }

    public function getContextList($input)
    {
        $data = [
            $this->contextLogInCourse(),
            $this->contextCommon(2, 2, 'Truy cập my course'),
            $this->contextCommon(5, 5, 'Bật pop-up thông báo'),
            $this->contextCommon(6, 6, 'Bật pop-up thông báo - Khóa học'),
            $this->contextCommon(7, 7, 'Bật pop-up  - đăng ký tham gia sự kiện'),
            $this->contextCommon(8, 8, 'Bật popup tặng tài liệu học sinh'),
            $this->contextCommon(9, 9, 'Mở đến post facebook'),
            $this->contextCommon(10, 10, 'Bảo trì'),
            $this->contextCommon(11, 11, 'Cập nhật cache'),
            $this->contextCommon(12, 12, 'Đăng xuất'),
            $this->contextCommon(14, 14, 'Chuyển đến 1 trang webview'),
            $this->contextLoginLivestream(),
            $this->contextLoginLivestreamDetail(),
            $this->contextCommon(17, 17, 'Truy cập ứng dụng'),
        ];
        return $data;
    }
    /**
     * Create new notify
     * Step 1: Create new notify with: title, body, name, image_url = url(image)
     * Step 2: Update notify_filter with app_id, filter_id, type_id, operator_id, detail = 'option_id = 1' or 'filter_text = 15' or 'filter_date = 2020/12/22 12:24:14'
     * Step 3: Update notify_profile with schedule_id and schedule_date(if have), start_date(if have), end_date(if have), schedule_time(if have)
     * Step 4: Update notify_context with context_id and sound and ios_badge, expire
     */

    //Step1
    public function postNotifyCreateStep1($input)
    {
        $input['image_url'] = '';
        $file = request()->file('image');
        $imageUrl = '';
        if ($file) {
            $fileNameImage = generateRandomString() . $file->getClientOriginalName();
            $file->move(public_path("/uploads/notify" . '/images/'), $fileNameImage);
            $imageUrl = url('/uploads/notify'  . '/images/' . $fileNameImage);
            $input['image_url'] = $imageUrl;
        }
        $notifyId = HocmaiNotify::create($input)->id;
        $res['notify_id'] = $notifyId;
        $res['image_url'] = $imageUrl;
        return $res;
    }
    //Step2
    public function getOptionNotify($input)
    {
        $detail = '';
        if (isset($input['option_id'])) {
            $detail = 'option_id='.$input['option_id'];
            return $detail;
        }
        if (isset($input['filter_text'])) {
            $detail = 'filter_text='.$input['filter_text'];
            return $detail;
        }
        if (isset($input['filter_date'])) {
            $detail = 'filter_date='.$input['filter_date'];
            return $detail;
        }
        return $detail;
    }

    /**
     * example step2 client sent
      * {
        "notify_id":38,
        "filter":[
        {
        "filter_id":12,
        "type_id":1,
        "operator_id":5,
        "option_id":1
        },
        {
        "filter_id":14,
        "type_id":1,
        "operator_id":1,
        "option_id":0
        }
        ],
        "app_id":1,
        "app_name":"vn.hocmai.appuser"
        }
     */
    public function setNotifyFilter($input)
    {
        $notifyId = $input['notify_id'];
        $filter = $input['filter'];
        foreach ($filter as $value)
        {
            $value['notify_id'] = $notifyId;
            $value['detail'] = $this->getOptionNotify($value);
            $value['app_id'] = $input['app_id'];
            HocmaiNotifyFilter::create($value);
        }
        return $input['notify_id'];
    }
    public function postNotifyCreateStep2($arrayInput)
    {
        foreach ($arrayInput as $input) {
            $this->setNotifyFilter($input);
        }
//        $notifyId = $input['notify_id'];
//        $filter = $input['filter'];
//        foreach ($filter as $value)
//        {
//            $value['notify_id'] = $notifyId;
//            $value['detail'] = $this->getOptionNotify($value);
//            HocmaiNotifyFilter::create($value);
//        }

        $res['notify_id'] = $input['notify_id'];
        return $res;
    }

    /**
     * example step3 client sent
     * {
        "notify_id":38,
        "schedule_id":2,
        "start_date":"",
        "end_date":"",
        "schedule_time":"",
        "schedule_date":"2020-09-27 00:00:00"
        }
     */
    public function postNotifyCreateStep3($input)
    {
        $notifyProfile = HocmaiNotifyProfile::create($input)->id;
        $res['notify_id'] = $input['notify_id'];
        $res['notify_profile_id'] = $notifyProfile;
        return $res;
    }

    /**
     *  example step4 client sent
     */
    public function setContextExpire($expire)
    {
        $number = $number_type = '';
        if (isset($expire['number'])) {
            $number = $expire['number'];
        }
        if (isset($expire['number_type'])) {
            $number_type = $expire['number_type'];
        }
        $expire = 'number=' . $number . ',' . 'number_type' . $number_type;
        return $expire;
    }

    public function setContextDetail($context)
    {
        $res = '';
        foreach ($context as $key => $value)
        {
            $res .= $key . ':' . $value . ',';
        }
        return $res;
    }

    public function postNotifyCreateStep4($input)
    {
        $upData['notify_id'] = $input['notify_id'];
        $upData['sound'] = $input['sound'];
        $upData['ios_badge'] = $input['ios_badge'];
        $upData['action_type'] = $upData['context_id'] = $input['context']['action_type'];
        $upData['expire'] = $this->setContextExpire($input['expire']);
        $upData['detail'] = $this->setContextDetail($input['context']);
        $notifyContext = HocmaiNotifyContext::create($upData)->id;
        $res['notify_id'] = $upData['notify_id'];
        $res['notify_context_id'] = $notifyContext;
        return $res;
    }
    public function getInfoByFilter($data, $filterId, $condition, $conditionValue)
    {
        //FIRST SESSION
        if ($filterId == 1)
        {
            $data = $data->where('hocmai_users.first_login', $condition, $conditionValue);
        }
        //Last SESSION
        if ($filterId == 2)
        {
            $data = $data->where('hocmai_users.last_login', $condition, $conditionValue);
        }
        //location
        if ($filterId == 10)
        {
            $data = $data->where('hocmai_users.city_id', $condition, $conditionValue);
        }
        //user_id
        if ($filterId == 11)
        {
            $data = $data->where('hocmai_users.hocmai_user_id', $condition, $conditionValue);
        }
        //user_phone
        if ($filterId == 12)
        {
            $data = $data->where('hocmai_users.phone', $condition, $conditionValue);
        }
        //session count(number_open_app)
        if ($filterId == 13)
        {
            $data = $data->where('hocmai_users.number_open_app', $condition, $conditionValue);
        }
        //user class(class_id)
        if ($filterId == 16)
        {
            $data = $data->where('hocmai_users.class_id', $condition, $conditionValue);
        }
        //user dob(birthday)
        if ($filterId == 17)
        {
            $data = $data->where('hocmai_users.birthday', $condition, $conditionValue);
        }
        //register_time
        if ($filterId == 18)
        {
            $data = $data->where('hocmai_users.register_time', $condition, $conditionValue);
        }
        //app version
        if ($filterId == 8)
        {
            $data = $data->join('hocmai_user_app', 'hocmai_users.id', '=', 'hocmai_user_app.user_id')
                ->join('hocmai_apps', 'hocmai_apps.id', '=', 'hocmai_user_app.hocmai_app_id')
                ->where('hocmai_apps.app_version', $condition, $conditionValue);
        }
        //LAST TIME OPEN COURSE
        if ($filterId == 14)
        {
            $now = date('Y-m-d h:i:s');
            if ($condition == HocmaiDataConst::OPERATOR_LESS) {
                $conditionValue = date("Y-m-d H:i:s",strtotime($now." -" . $conditionValue . " hours"));
            }
            if ($condition == HocmaiDataConst::OPERATOR_GREATER) {
                $conditionValue = date("Y-m-d H:i:s",strtotime($now." +" . $conditionValue . " hours"));
            }
            $data = $data->join('hocmai_course_user_log', 'hocmai_users.id', '=', 'hocmai_course_user_log.user_id')
                ->join('hocmai_courses', 'hocmai_courses.id', '=', 'hocmai_course_user_log.course_id')
                ->where('hocmai_course_user_log.last_time', $condition, $conditionValue);
        }
         //last lesson learning
        if ($filterId == 15)
        {
            $data = $data->join('hocmai_lesson_user_log', 'hocmai_users.id', '=', 'hocmai_lesson_user_log.user_id')
                ->join('hocmai_lessons', 'hocmai_lessons.id', '=', 'hocmai_lesson_user_log.lesson_id')
                ->where('hocmai_lesson_user_log.lesson_id', $condition, $conditionValue);
        }
        //AMOUNT COURSE IN MYCOURSE(count(course_id))
        if ($filterId == 20)
        {
            $data = $data->where('hocmai_users.total_course', $condition, $conditionValue);
        }
        return $data;
    }
    /**
     * Get list device_token by notifyId, filter_id, context_id
     * Format data before send firebase
     */
    public function getCourseByContextDetail($detail)
    {
        $data = explode(',', $detail);
        $courseId = $lessionId = '';
        foreach ($data as $value)
        {
            $res = explode(':', $value);
            if ($res[0] == 'course_id') {
                $courseId = $res[1];
            }
            if ($res[0] == 'lesson_id') {
                $lessionId = $res[1];
            }
        }
        return [
            'course_id' => $courseId,
            'lesson_id' => $lessionId,
        ];
    }

    public function getUserListByAppId($notifyId, $appId)
    {
        //lay danh sach filter
        $notifyFilters = HocmaiNotifyFilter::where('notify_id', $notifyId)->where('app_id', $appId)->get();
        $operator = $this->commonService->getOperator();
        $data = DB::table('hocmai_users');
        foreach ($notifyFilters as $value)
        {
            $filterId = $value->filter_id;
            $explode = explode('=', $value->detail);
            $conditionValue = $explode[1];
            var_dump('data');
            var_dump($data);
            var_dump('filterId');
            var_dump($filterId);
            var_dump('condition');
            var_dump($condition);
            var_dump('conditionValue');
            var_dump($conditionValue);
            dd('tunglaso1');
            $condition = $operator[$value->operator_id];
            $data = $this->getInfoByFilter($data, $filterId, $condition, $conditionValue);
        }
        $data = $data->whereNull('hocmai_users.deleted_at')
            ->select('hocmai_users.id')
            ->groupBy('hocmai_users.id')
            ->toSql();
            // ->get();
            dd($data);
        return $this->getUserListByContext($notifyId, $data);
    }

    public function getUserListByContext($notifyId, $data)
    {
        $res = [];
        foreach ($data as $v) {
            $res[] = $v->id;
        }
        return $res;
//        $context = HocmaiNotifyContext::where('notify_id', $notifyId)->first();
//        if (!$context) {
//            dd('thieu context cho notify_id = ' . $notifyId);
//        }
//        $contextId = $context->context_id;
//        if ($contextId == 1) {
//            $detail = $context->detail;
//            $courseLesson = $this->getCourseByContextDetail($detail);
//            if ($courseLesson['lesson_id'] != '') {
//                $lessonId = $courseLesson['lesson_id'];
//                foreach ($data as $value) {
//                    $lessonUser = HocmaiLessonUser::where('lesson_id', $lessonId)
//                        ->where('user_id', $value->id)->first();
//                    if ($lessonUser) {
//                        $res[] = $value->id;
//                    }
//                }
//            }
//            else {
//                if ($courseLesson['course_id'] != '') {
//                    $courseId = $courseLesson['course_id'];
//                    foreach ($data as $value) {
//                        $courseUser = HocmaiCourseUser::where('course_id', $courseId)
//                            ->where('user_id', $value->id)->first();
//                        if ($courseUser) {
//                            $res[] = $value->id;
//                        }
//                    }
//                }
//            }
//        } else {
//            foreach ($data as $v) {
//                $res[] = $v->id;
//            }
//        }
//        return $res;
    }

    public function prepareData($notifyId)
    {
        $listDevice = [];
        $android = $this->getUserListByAppId($notifyId, 1);
        $ios = $this->getUserListByAppId($notifyId, 2);
        $res = array_unique (array_merge ($android, $ios));
        foreach ($res as $userId) {
            $deviceUser = HocmaiDeviceUser::where('user_id', $userId)->orderBy('created_at', 'DESC')->first();
            if ($deviceUser) {
                $listDevice[] = $deviceUser->device_token;
            }
        }
        $this->saveDeviceBeforeSend($listDevice, $notifyId);
        return $listDevice;
    }

    public function getNotifyDetail($notifyId)
    {
        $data = HocmaiNotify::find($notifyId);
        if (!$data){
            dd('sai notifyId = ' . $notifyId);
        }
        return $data;
    }

    public function getTitleNotify($notifyId)
    {
        $data = $this->getNotifyDetail($notifyId);
        return $data->title;
    }

    public function getBodyNotify($notifyId)
    {
        $data = $this->getNotifyDetail($notifyId);
        return $data->body;
    }

    public function getIconNotify($notifyId)
    {
        $data = $this->getNotifyDetail($notifyId);
        return $data->image_url;
    }

    public function getSoundNotify($notifyId)
    {
        $data = HocmaiNotifyContext::where('notify_id', $notifyId)->first();
        if (!$data) {
            dd('sound sai notifyId = ' .  $notifyId);
        }
        return $data->sound;
    }

    public function getIosBadgeNotify($notifyId)
    {
        $data = HocmaiNotifyContext::where('notify_id', $notifyId)->first();
        if (!$data) {
            dd('ios_badge sai notifyId = ' .  $notifyId);
        }
        return $data->ios_badge;
    }

    public function getInfoByActionTypeDetail($detail, $field)
    {
        $result = [];
        $data = explode(',', $detail);
        foreach ($data as $value) {
            $res = explode(':', $value);
            if ($res[0] == 'course_id') {
                $result['course_id'] = $courseId = $res[1];
            }
            if ($res[0] == 'lesson_id') {
                $result['lesson_id'] = $res[1];
            }
            if ($res[0] == 'url') {
                $result['url'] = $res[1];
            }
            if ($res[0] == 'livestream_id') {
                $result['livestream_id'] = $res[1];
            }
            if ($res[0] == 'school_block_id') {
                $result['school_block_id'] = $res[1];
            }
        }
        if (isset($result[$field])) {
            return $result[$field];
        }
        return null;
    }

    public function getIsBuyCourse($detail)
    {
        return true;
    }

    public function formatDataNotify($notifyId, $title, $body, $import = null)
    {
        $data = HocmaiNotifyContext::where('notify_id', $notifyId)->first();

        if (!$data) {
            dd('formatDataNotify sai notifyId = ' .  $notifyId);
        }
        $actionType = $data->action_type;
        $res['title'] = $title;
        $res['body'] = $body;
        // $res = $this->convertToObject()
        // $this->action_type = $actionType;
        // $res['data'] = $this->action_type;
        $res['action_type'] = $actionType;
        if ($actionType == 1) {
            $res['course_id'] = $this->getInfoByActionTypeDetail($data->detail, 'course_id');
            $res['lesson_id'] = $this->getInfoByActionTypeDetail($data->detail, 'lesson_id');
            $res['is_buy'] = $this->getIsBuyCourse($data->detail);
        }
        if ($actionType == 14) {
            $res['url'] = $this->getInfoByActionTypeDetail($data->detail, 'url');
        }
        if ($actionType == 15) {
            $res['school_block_id'] = $this->getInfoByActionTypeDetail($data->detail, 'school_block_id');
        }
        return $res;
    }

    public function updateNotifySuccess($notifyId, $failure, $success)
    {
        $notify = HocmaiNotify::find($notifyId);
        $notify->update([
            'status' => HocmaiDataConst::UPLOAD_FIREBASE_SUCCESS,
            'success' => $success,
            'failure' => $failure,
        ]);
        return true;
    }

    public function saveDeviceBeforeSend($listDevice, $notifyId)
    {
        $list = [];
        foreach ($listDevice as $token)
        {
            // HocmaiNotifyDevice::create(['notify_id' => $notifyId, 'device_token' => $token, 'status' => HocmaiDataConst::BEFORE_SENT]);
            $list[] = [
                'notify_id' => $notifyId,
                'device_token' => $token,
                'status' => HocmaiDataConst::BEFORE_SENT,
            ];
        }
        HocmaiNotifyDevice::insert($list);
        return true;
    }

    public function updateNotifyDevice($notifyId, $deviceToken, $failure = null)
    {
        $notifyDevice = HocmaiNotifyDevice::where('notify_id', $notifyId)->where('device_token', $deviceToken)
            ->first();
        if ($notifyDevice) {
            if ($failure) {
                $notifyDevice->update(['status' => HocmaiDataConst::SENT_FAIL]);
            } else{
                $notifyDevice->update(['status' => HocmaiDataConst::SENT_SUCCESS]);
            }
            return true;
        }
        HocmaiNotifyDeviceError::create(['notify_id' => $notifyId, 'device_token' => $deviceToken]);
        return true;
    }

    public function getListDeviceTokens($notifyId)
    {
        $listDevice = HocmaiNotifyDevice::where('notify_id', $notifyId)->where('status', HocmaiDataConst::BEFORE_SENT)->pluck('device_token');
        return $listDevice;
    }

    public function getListDeviceTokensError($notifyId)
    {
        $listDevice = HocmaiNotifyDeviceError::where('notify_id', $notifyId)->pluck('device_token');
        return $listDevice;
    }

    public function getListDeviceTokensSentFail($notifyId)
    {
        $listDevice = HocmaiNotifyDevice::where('notify_id', $notifyId)
            ->where('status', HocmaiDataConst::SENT_FAIL)
            ->pluck('device_token');
        return $listDevice;
    }

    public function getListDeviceTokensSentSuccess($notifyId)
    {
        $listDevice = HocmaiNotifyDevice::where('notify_id', $notifyId)
            ->where('status', HocmaiDataConst::SENT_SUCCESS)
            ->pluck('device_token');
        return $listDevice;
    }

    public function getListDeviceByImport($notifyId)
    {
        $list = HocmaiNotifyDevice::where('notify_id', $notifyId)->get();
        //lấy danh sách user theo device_token
        $listUser = $listDevice = [];
        foreach ($list as $item)
        {
            $deviceToken = $item->device_token;
            $deviceUser = HocmaiDeviceUser::where('device_token', $deviceToken)->first();
            if ($deviceUser) {
                $listUser[] = $deviceUser->user_id;
            }
        }
        $data = HocmaiUser::whereIn('id', $listUser)->get();
        //lấy danh sách user kết hợp thêm điều kiện ngữ cảnh
        $res = $this->getUserListByContext($notifyId, $data);
        //Lấy danh sách device_token đúng theo danh sách import kết hợp ngữ cảnh là $res
        foreach ($res as $userId) {
            $deviceUser = HocmaiDeviceUser::where('user_id', $userId)->orderBy('created_at', 'DESC')->first();
            if ($deviceUser) {
                $listDevice[] = $deviceUser->device_token;
            }
        }
        return $listDevice;
    }

    public function postDeviceTokenUserHocmaiId($input)
    {
        $hocmai_user_id = $input['hocmai_user_id'];
        $user = HocmaiUser::where('hocmai_user_id', $hocmai_user_id)->first();
        if (!$user) {
            dd('Không có user này trong hệ thống');
        }
        $res = [];
        $nameOs = '';
        $userId = $user->id;
        $os = HocmaiDataConst::ANOTHER;
        $list = HocmaiDeviceUser::where('user_id', $userId)->orderBy('created_at', 'DESC')->get();
        foreach ($list as $key => $hocmaiDeviceUser) {
            $token = $hocmaiDeviceUser->device_token;
            $created_at = $hocmaiDeviceUser->created_at;
            $strlen = strlen($token);
            if ($strlen == HocmaiDataConst::ANDROID_LENGTH) {
                $os = HocmaiDataConst::ANDROID;
                $nameOs = 'ANDROID';
            }
            if ($strlen == HocmaiDataConst::IOS_LENGTH) {
                $os = HocmaiDataConst::IOS;
                $nameOs = 'IOS';
            }
            $user = HocmaiUser::find($userId);
            $firstLogin = '';
            if ($user) {
                $firstLogin = $user->first_login;
            }
            $res[$key]['device_token'] = $token;
            $res[$key]['app_os'] = $os;
            $res[$key]['os_name'] = $nameOs;
            $res[$key]['token_created_at'] = $created_at->format('Y-m-d H:i:s');
            $res[$key]['first_login'] = $firstLogin;
        }
        return $res;
    }

}
