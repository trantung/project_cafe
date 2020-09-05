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
});
//api backend
Route::group([
    'prefix' => 'api_hocmai_backend',
    'namespace' => 'APV\Hocmai\Http\Controllers\API',
], function () {
    // //Danh sách bộ lọc
    // Route::get('filter/list', function(){
    //     dd(11);
    // });
    Route::get('filter/list', 'HocmaiBackendController@getFilterList');
});