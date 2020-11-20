<?php
namespace APV\Hocmai\Services;

use APV\Hocmai\Models\HocmaiLesson;
use APV\Hocmai\Models\HocmaiLessonUser;
use APV\Hocmai\Models\HocmaiUser;
use APV\Hocmai\Models\HocmaiApp;
use APV\Hocmai\Models\HocmaiUserApp;
use APV\Hocmai\Models\HocmaiUserLoginLog;
use APV\Hocmai\Models\HocmaiDevice;
use APV\Hocmai\Models\HocmaiDeviceUser;
use APV\Hocmai\Models\HocmaiCourse;
use APV\Hocmai\Models\HocmaiCourseUser;
use APV\Hocmai\Models\HocmaiCourseUserLog;
use APV\Hocmai\Models\HocmaiLessonUserLog;
use APV\Hocmai\Models\HocmaiAppVersion;
use APV\Hocmai\Constants\HocmaiDataConst;
use APV\Base\Services\BaseService;
use Illuminate\Http\Request;

class HocmaiService extends BaseService
{
    public function __construct(HocmaiUser $model)
    {
        parent::__construct($model);
    }

    public function postAppInfo($input)
    {
        $res = [];
        $arrayField = [
            'app_version', 'app_os'
        ];
        //check app_id và app_version và app_os tồn tại hay chưa
        $check = HocmaiApp::where('app_os', $input['app_os'])
            ->first();
        if ($check) {
            $appId = $check->id;
            $version = HocmaiAppVersion::where('version', $input['app_version'])
                ->first();
            if (!$version) {
                HocmaiAppVersion::create([
                    'app_id' => $appId,
                    'version' => $input['app_version'],
                    'app_version' => $this->convertStringToInt($input['app_version']),
                ])->id;
                return true;
            }
            $version->update([
                'app_id' => $appId,
                'version' => $input['app_version'],
                'app_version' => $this->convertStringToInt($input['app_version']),
            ]);
            return true;
        }
        $appId = HocmaiApp::create([
            'app_os' => $input['app_os'],
        ])->id;
        HocmaiAppVersion::create([
            'app_id' => $appId,
            'version' => $input['app_version'],
            'app_version' => $this->convertStringToInt($input['app_version']),
        ])->id;
        return $res;
    }

    public function convertStringToInt($string)
    {
        return str_replace('.', '', $string);
    }

    public function getHocmaiAppId($input)
    {
        $arrayField = [
            'app_version', 'app_os'
        ];
        $input = $this->formatInput($input, $arrayField);

        $check = HocmaiApp::where('app_os', $input['app_os'])
            ->first();
        if ($check) {
            return $check->id;
        }
        return null;
    }

    public function createNewUserApp($input, $hocmaiUserId)
    {
        $hocmaiAppId = $this->getHocmaiAppId($input);
        $arrayField = [
            'user_id', 'hocmai_user_id', 'hocmai_app_id'
        ];
        if (!$hocmaiAppId) {
            //ghi vao log
            return true;
        }
        $input = $this->formatInput($input, $arrayField);
        $checkHocmaiUserApp = HocmaiUserApp::where('user_id', $hocmaiUserId)
            ->where('hocmai_app_id', $hocmaiAppId)
            ->orderBy('created_at', 'DESC')
            ->first();
        if (!$checkHocmaiUserApp) {
            HocmaiUserApp::create([
                'user_id' => $hocmaiUserId,
                'hocmai_user_id' => $input['hocmai_user_id'],
                'hocmai_app_id' => $hocmaiAppId,
            ]);
            return true;
        }
        return true;
    }

    public function createNewUserLoginLog($input, $userId)
    {
        $now = date('Y-m-d H:i:s');
        $arrayField = [
            'hocmai_user_id'
        ];
        $input = $this->formatInput($input, $arrayField);
        $check = HocmaiUserLoginLog::where('user_id', $userId)->first();
        if ($check) {
            $check->update(['login' => $now]);
            return true;
        }
        HocmaiUserLoginLog::create([
            'user_id' => $userId,
            'hocmai_user_id' => $input['hocmai_user_id'],
            'login' => $now,
        ]);
        return true;
    }

    public  function getDeviceIdByDeviceToken($deviceToken)
    {
        $checkDevice = HocmaiDevice::where('device_token', $deviceToken)->first();
        if (!$checkDevice) {
            $deviceId = HocmaiDevice::create(['device_token' => $deviceToken])->id;
        } else {
            $deviceId = $checkDevice->id;
        }
        return $deviceId;
    }

    public function createNewDeviceUser($userId, $input)
    {
        $check = HocmaiDeviceUser::where('user_id', $userId)
            ->where('device_token', $input['device_token'])
            ->first();
         if (!$check) {
             HocmaiDeviceUser::create(['user_id' => $userId, 'device_token' => $input['device_token'], 'app_os' => $input['app_os']]);
         } else {
            // $data = HocmaiDeviceUser::where('user_id', $userId)
            //     ->orderBy('id', 'DESC')
            //     ->skip(0)
            //     ->take(5)
            //     ->pluck('id');
            // $list = $data->toArray();
            // HocmaiDeviceUser::whereNotIn('id', $list)->delete();
            HocmaiDeviceUser::create(['user_id' => $userId, 'device_token' => $input['device_token'], 'app_os' => $input['app_os']]);
         }
        return true;
    }

    public function postUserInfo($input)
    {
        $res = [];
        $now = date('Y-m-d H:i:s');
        $arrayField = [
            'device_token', 'hocmai_user_id', 'city_id', 'district_id', 'class_id', 'last_login', 'last_session',
            'phone', 'birthday', 'number_open_app', 'app_name', 'app_os', 'app_version', 'username'
        ];
        $input = $this->formatInput($input, $arrayField);
        $deviceToken = $input['device_token'];
        //check thông tin user đã có chưa
        $check = HocmaiUser::where('hocmai_user_id', $input['hocmai_user_id'])->first();

        if ($check) {
            //update thông tin last_login và birthday, class_id, city_id, district_id,...
            $check->update([
                'city_id' => $input['city_id'],
                'district_id' => $input['district_id'],
                'class_id' => $input['class_id'],
                'last_login' => $now,
                'last_session' => $now,
                'phone' => $input['phone'],
                'birthday' => $input['birthday'],
                'username' => $input['username'],
                'number_open_app' => $check->number_open_app + 1,
            ]);
            //tạo mới record trong bảng hocmai_user_app
            $this->createNewUserApp($input, $check->id);
            //tạo mới record trong bảng hocmai_user_login_log
            $this->createNewUserLoginLog($input, $check->id);
            //tạo mới record trong bảng hocmai_device_user
            $this->createNewDeviceUser($check->id, $input);
            $res['hocmai_user_id'] = $input['hocmai_user_id'];
            $res['user_id'] = $check->id;
            return $res;
        }
        $userId = HocmaiUser::create([
            'hocmai_user_id' => $input['hocmai_user_id'],
            'city_id' => $input['city_id'],
            'district_id' => $input['district_id'],
            'class_id' => $input['class_id'],
            'phone' => $input['phone'],
            'birthday' => $input['birthday'],
            'first_login' => $now,
            'last_login' => $now,
            'last_session' => $now,
            'username' => $input['username'],
            'number_open_app' => 1,
        ])->id;
        $this->createNewUserApp($input, $userId);
        $this->createNewUserLoginLog($input, $userId);
        $this->createNewDeviceUser($userId, $input);
        $res['hocmai_user_id'] = $input['hocmai_user_id'];
        $res['user_id'] = $userId;
        return $res;
    }

    public function createNewHocmaiCourseUser($userId, $hocmaiUserId, $courseId)
    {
        $checkCourseUser = HocmaiCourseUser::where('user_id', $userId)
            ->where('hocmai_user_id', $hocmaiUserId)
            ->where('course_id', $courseId)
            ->first();
        if ($checkCourseUser) {
            return true;
        }
        HocmaiCourseUser::create([
            'course_id' => $courseId,
            'user_id' => $userId,
            'hocmai_user_id' => $hocmaiUserId,
        ]);
        return true;
    }

    public function createNewHocmaiCourse($hocmaiCourseId, $hocmaiCourseName, $userId, $hocmaiUserId)
    {
        $checkCourse = HocmaiCourse::where('hocmai_course_id', $hocmaiCourseId)->first();
        if ($checkCourse) {
            $this->createNewHocmaiCourseUser($userId, $hocmaiUserId, $checkCourse->id);
            return true;
        }
        $courseId = HocmaiCourse::create([
            'hocmai_course_id' => $hocmaiCourseId,
            'course_name' => $hocmaiCourseName,
        ])->id;
        $this->createNewHocmaiCourseUser($userId, $hocmaiUserId, $courseId);
        return true;
    }

    public function postCourseList($input)
    {
        $res = [];
        if (!isset($input['hocmai_user_id']) || empty($input['hocmai_user_id'])) {
            return false;
        }
        $hocmaiUserId = $input['hocmai_user_id'];
        $check = HocmaiUser::where('hocmai_user_id', $hocmaiUserId)->first();
        if (!$check) {
            dd('ko co hocmai_user_id = ' . $hocmaiUserId . 'trong hocmai_users table');
        }
        $userId = $check->id;
        $courseListId = explode(',', $input['course_list_id']);
        $courseListName = explode(',', $input['course_list_name']);
        foreach ($courseListId as $key => $value)
        {
            $this->createNewHocmaiCourse($value, $courseListName[$key], $userId, $hocmaiUserId);
        }
        //update tổng số khóa học của học sinh
        $check->update(['total_course' => count($courseListId)]);
        $res['user_id'] = $check->id;
        $res['hocmai_user_id'] = $hocmaiUserId;
        $res['total_course'] = count($courseListId);
        return $res;
    }

    public function createNewHocmaiLessonUser($userId, $hocmaiUserId, $lessonId, $courseId)
    {
        $checkLessonUser = HocmaiLessonUser::where('user_id', $userId)
            ->where('hocmai_user_id', $hocmaiUserId)
            ->where('course_id', $courseId)
            ->where('lesson_id', $lessonId)
            ->first();
        if ($checkLessonUser) {
            return true;
        }
        HocmaiLessonUser::create([
            'course_id' => $courseId,
            'user_id' => $userId,
            'hocmai_user_id' => $hocmaiUserId,
            'lesson_id' => $lessonId,
        ]);
        return true;
    }

    public function createNewHocmaiLesson($hocmaiLessonId, $hocmaiLessonName, $userId, $hocmaiUserId, $courseId)
    {
        $checkLesson = HocmaiLesson::where('hocmai_lesson_id', $hocmaiLessonId)->first();
        if ($checkLesson) {
            $this->createNewHocmaiLessonUser($userId, $hocmaiUserId, $checkLesson->id, $courseId);
            return true;
        }
        $lessonId = HocmaiLesson::create([
            'hocmai_lesson_id' => $hocmaiLessonId,
            'lesson_name' => $hocmaiLessonName,
            'course_id' => $courseId,
        ])->id;
        $this->createNewHocmaiLessonUser($userId, $hocmaiUserId, $lessonId, $courseId);
        return true;
    }

    public function createNewHocmaiCourseUserLog($userId, $hocmaiUserId, $courseId)
    {
        $now = date('Y-m-d H:i:s');
        $checkLog = HocmaiCourseUserLog::where('user_id', $userId)
            ->where('hocmai_user_id', $hocmaiUserId)
            ->where('course_id', $courseId)
            ->first();
        if ($checkLog) {
            $checkLog->update(['last_time' => $now]);
            return true;
        }
        HocmaiCourseUserLog::create([
            'user_id' => $userId,
            'course_id' => $courseId,
            'hocmai_user_id' => $hocmaiUserId,
            'first_time' => $now,
            'last_time' => $now,
        ]);
        return true;
    }

    public function postCourseDetail($input)
    {
        if (!isset($input['hocmai_user_id']) || empty($input['hocmai_user_id'])) {
            return false;
        }
        if (!isset($input['hocmai_course_id']) || empty($input['hocmai_course_id'])) {
            return false;
        }
        $hocmaiUserId = $input['hocmai_user_id'];
        $check = HocmaiUser::where('hocmai_user_id', $hocmaiUserId)->first();
        if (!$check) {
            dd('ko co hocmai_user_id = ' . $hocmaiUserId . 'trong hocmai_users table');
        }
        $checkCourse = HocmaiCourse::where('hocmai_course_id', $input['hocmai_course_id'])->first();
        if (!$checkCourse) {
            dd('ko co hocmai_course_id = ' . $input['hocmai_course_id'] . ' trong hocmai_courses table');
        }
        $courseId = $checkCourse->id;
        $userId = $check->id;
        $lessonListId = explode(',', $input['lesson_list_id']);
        $lessonListName = explode(',', $input['lesson_list_name']);
        foreach ($lessonListId as $key => $value)
        {
            $this->createNewHocmaiLesson($value, $lessonListName[$key], $userId, $hocmaiUserId, $courseId);
        }
        //Lưu vào thời gian first_time và last_time của học sinh ở khóa học
        $this->createNewHocmaiCourseUserLog($userId, $hocmaiUserId, $courseId);

        $res['user_id'] = $check->id;
        $res['hocmai_user_id'] = $hocmaiUserId;
        $res['course_id'] = $courseId;
        return $res;
    }

    public function createNewHocmaiLessonUserLog($userId, $hocmaiUserId, $lessonId, $courseId)
    {
        $now = date('Y-m-d H:i:s');
        $checkLog = HocmaiLessonUserLog::where('user_id', $userId)
            ->where('hocmai_user_id', $hocmaiUserId)
            ->where('course_id', $courseId)
            ->where('lesson_id', $lessonId)
            ->first();
        if ($checkLog) {
            $checkLog->update(['last_time' => $now]);
            return true;
        }
        HocmaiLessonUserLog::create([
            'user_id' => $userId,
            'course_id' => $courseId,
            'hocmai_user_id' => $hocmaiUserId,
            'lesson_id' => $lessonId,
            'first_time' => $now,
            'last_time' => $now,
        ]);
        return true;
    }

    public function  postLessonDetail($input)
    {
        if (!isset($input['hocmai_user_id']) || empty($input['hocmai_user_id'])) {
            return false;
        }
        if (!isset($input['hocmai_lesson_id']) || empty($input['hocmai_lesson_id'])) {
            return false;
        }
        $hocmaiUserId = $input['hocmai_user_id'];
        $lessonId = $input['hocmai_lesson_id'];

        $check = HocmaiUser::where('hocmai_user_id', $hocmaiUserId)->first();
        if (!$check) {
            dd('ko co hocmai_user_id = ' . $hocmaiUserId . 'trong hocmai_users table');
        }
        $userId = $check->id;
        $lesson = HocmaiLesson::where('hocmai_lesson_id', $lessonId)->first();
        if (!$lesson) {
            dd('ko co hocmai_lesson_id = ' . $input['hocmai_lesson_id'] . 'trong hocmai_lesson table');
        }
        $this->createNewHocmaiLessonUserLog($userId, $hocmaiUserId, $lesson->id, $lesson->course_id);
        $res['user_id'] = $check->id;
        $res['hocmai_user_id'] = $hocmaiUserId;
        $res['lesson_id'] = $lessonId;
        return $res;
    }

    public function postLogout($input)
    {
        if (!isset($input['hocmai_user_id']) || empty($input['hocmai_user_id'])) {
            return false;
        }
        $hocmaiUserId = $input['hocmai_user_id'];
        $check = HocmaiUser::where('hocmai_user_id', $hocmaiUserId)->first();
        if (!$check) {
            dd('ko co hocmai_user_id = ' . $hocmaiUserId . 'trong hocmai_users table');
        }
        //update last_session vào hocmai_users table
        $now = date('Y-m-d H:i:s');
        $check->update(['last_session' => $now]);
        $res['user_id'] = $check->id;
        $res['hocmai_user_id'] = $hocmaiUserId;
        $res['last_session'] = $now;
        return $res;
    }

    public function createNewUserFull($hocmaiUserId, $cityId, $deviceToken)
    {
        $checkUser = HocmaiUser::where('hocmai_user_id', $hocmaiUserId)->first();
        if ($checkUser) {
            $userId = $checkUser->id;
        }
        if (!$checkUser) {
            if ($cityId == '') {
                $cityId = 0;
            }
            $userId = HocmaiUser::create([
                'hocmai_user_id' => $hocmaiUserId,
                'city_id' => $cityId,
            ])->id;
        }
        HocmaiDeviceUser::create([
            'user_id' => $userId,
            'device_token' => $deviceToken,
            'hocmai_device_id' => $deviceToken,
        ]);
        return true;
    }

    public function createOrUpdateCourse($id, $name, $listUserId)
    {
        $check = HocmaiCourse::where('hocmai_course_id', $id)->first();
        if (!$check) {
            $courseId = HocmaiCourse::create([
                'hocmai_course_id' => $id,
                'course_name' => $name,
            ])->id;
        } else {
            $courseId = $check->id;
        }
        foreach ($listUserId as $key => $hocmaiUserId) {
            $user = HocmaiUser::where('hocmai_user_id', $hocmaiUserId)->first();
            if (!$user) {
                $userId = HocmaiUser::create(['hocmai_user_id' => $hocmaiUserId])->id;
                
            } else {
                $userId = $user->id;
            }
            $courseUser = HocmaiCourseUser::where('course_id', $courseId)->where('user_id', $userId)->first();
            if (!$courseUser) {
                HocmaiCourseUser::create([
                    'course_id' => $courseId,
                    'user_id' => $userId,
                    'hocmai_user_id' => $hocmaiUserId,
                ]);
            }
        }
        return true;
    }

    public function postRefactor($input)
    {
        $listUser = [];
        $list = HocmaiUserApp::select('user_id','hocmai_app_id')
            ->whereNotNull('hocmai_app_id')
            ->whereNotNull('user_id')
            ->whereNotNull('hocmai_user_id')
            ->get();
//        dd($list);
        foreach ($list as $value)
        {
            $listUser[] = $value->id;
        }
//        dd(count($list));
//        $test['count'] = count($data);
//        $res['data'] = $data;
        return $list;
    }
}
