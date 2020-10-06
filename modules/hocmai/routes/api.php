<?php
Route::group([
    'prefix' => 'api_hocmai',
    'namespace' => 'APV\Hocmai\Http\Controllers\API',
], function () {
    //Lấy thông tin app info: app_version, app_id(id của app)
    Route::post('app/info', 'HocmaiController@postAppInfo');
    //Lấy thông tin user đăng nhập
    Route::post('user/info', 'HocmaiController@postUserInfo');

    //Lấy danh sách khóa học(course) của hocmai_user_id.
    //param: hocmai_user_id, course_list_id = 1,2,3,4..; course_list_name = 'kh 1', 'kh2', 'kh3'
    Route::post('course/list', 'HocmaiController@postCourseList');

    //Chi tiết 1 khóa học
    //param: hocmai_user_id, hocmai_course_id, lesson_list_id = 1,2,3,..; lesson_list_name = 'lesson1', 'lesson2', 'lesson3'
    Route::post('course/detail', 'HocmaiController@postCourseDetail');

    //Chi tiết 1 bài giảng
    //param: hocmai_user_id, hocmai_lesson_id = 1;
    Route::post('lesson/detail', 'HocmaiController@postLessonDetail');

    //Khi logout khỏi app
    //param: hocmai_user_id
    Route::post('logout', 'HocmaiController@postLogout');

    //Sync with hocmai system api
    //dong bo user. url: https://api-prod.hocmai.vn/notification/migration/user
    Route::post('sync/user', 'HocmaiController@postSyncUser');
    //dong bo khoa hoc da dang ky url: https://api-prod.hocmai.vn/notification/migration/packageRegistered
    Route::post('sync/course/regist', 'HocmaiController@postSyncCourseRegist');
    //dong bo thong tin goi IAP da nap. url: https://api-prod.hocmai.vn/notification/migration/IAPPurchased
    Route::post('sync/iap/regist', 'HocmaiController@postSyncIapRegist');
    
    //dong bo chuong trinh da dang ky url: https://api-prod.hocmai.vn/notification/migration/programRegistered
    // Route::post('sync/program/regist', 'HocmaiController@postSyncProgramRegist');

    

});
//api backend
Route::group([
    'prefix' => 'api_hocmai_backend',
    'namespace' => 'APV\Hocmai\Http\Controllers\API',
], function () {
    //demo du lieu
    Route::get('database/demo', 'HocmaiBackendController@demo');
    //Danh sách bộ lọc
    Route::get('filter/list', 'HocmaiBackendController@getFilterList');
    //Danh sách ngữ cảnh(context)
    Route::get('context/list', 'HocmaiBackendController@getContextList');

    //Create new notify
    //Step1: parameter
    Route::post('notify/create/step1', 'HocmaiBackendController@postNotifyCreateStep1');
    //Step2
    Route::post('notify/create/step2', 'HocmaiBackendController@postNotifyCreateStep2');
    //Step3
    Route::post('notify/create/step3', 'HocmaiBackendController@postNotifyCreateStep3');
    //Step4
    Route::post('notify/create/step4', 'HocmaiBackendController@postNotifyCreateStep4');

    Route::post('notify/test', 'HocmaiBackendController@postNotifyTest');

    //import file excel cac device_token
    Route::post('notify/import', 'HocmaiBackendController@postNotifyImport');

});