<?php
namespace APV\Hocmai\Services;

use APV\Hocmai\Models\HocmaiCourse;
use APV\Hocmai\Models\HocmaiLesson;
use APV\Hocmai\Models\HocmaiLessonUserLog;
use APV\Hocmai\Models\HocmaiLivestream;
use APV\Hocmai\Models\HocmaiUser;
use APV\Hocmai\Models\HocmaiApp;
use APV\Hocmai\Models\HocmaiCity;
use APV\Base\Services\BaseService;
use APV\Hocmai\Constants\HocmaiDataConst;


class HocmaiBackendService
{
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
            $res[$key]['option_id'] = $value->id;
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
        $list = [1 => 10, 2 => 15];
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
            'type_id' => HocmaiDataConst::TYPE_OPTION,
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
            'option' => $this->getOptionLastTimeOpenCourse(),
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
            1 => 'Lớp 1',
            2 => 'Lớp 2',
            3 => 'Lớp 3',
            4 => 'Lớp 4',
            5 => 'Lớp 5',
            6 => 'Lớp 6',
            7 => 'Lớp 7',
            8 => 'Lớp 8',
            9 => 'Lớp 9',
            10 => 'Lớp 10',
            11 => 'Lớp 11',
            12 => 'Lớp 12',
        ];
        foreach ($list as $key => $value)
        {
            $res[$key]['option_id'] = $key;
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
            1 => $this->firstSession(),
            2 => $this->lastSession(),
            8 => $this->appVersion(),
            10 => $this->location(),
            11 => $this->getListUser(),
            12 => $this->getPhone(),
            13 => $this->sessionCount(),
            14 => $this->lastTimeOpenCourse(),
            15 => $this->lastLessonLearning(),
            16 => $this->userClass(),
            17 => $this->userDob(),
            18 => $this->userRegisterTime(),
            20 => $this->amountCourseInMyCourse(),
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
            'id' => 15,
            'action_type' => 15,
            'action_name' => 'Truy cập vào kênh livestream',
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
            1 => $this->contextLogInCourse(),
            2 => $this->contextCommon(2, 2, 'Truy cập my course'),
            5 => $this->contextCommon(5, 5, 'Bật pop-up thông báo'),
            6 => $this->contextCommon(6, 6, 'Bật pop-up thông báo - Khóa học'),
            7 => $this->contextCommon(7, 7, 'Bật pop-up  - đăng ký tham gia sự kiện'),
            8 => $this->contextCommon(8, 8, 'Bật popup tặng tài liệu học sinh'),
            9 => $this->contextCommon(9, 9, 'Mở đến post facebook'),
            10 => $this->contextCommon(10, 10, 'Bảo trì'),
            11 => $this->contextCommon(11, 11, 'Cập nhật cache'),
            12 => $this->contextCommon(12, 12, 'Đăng xuất'),
            14 => $this->contextCommon(14, 14, 'Chuyển đến 1 trang webview'),
            15 => $this->contextLoginLivestream(),
            16 => $this->contextLoginLivestreamDetail(),
            17 => $this->contextCommon(17, 17, 'Truy cập ứng dụng'),
        ];
        return $data;
    }

}
