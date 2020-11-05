<?php
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
    //Step3:
    Route::post('notify/create/step3', 'HocmaiBackendController@postNotifyCreateStep3');
    //Step4: trả về số lượng device_token sẽ được gửi
    Route::post('notify/create/step4', 'HocmaiBackendController@postNotifyCreateStep4');
    //api lưu notify nhưng chưa gửi
    Route::post('notify/save_not_send', 'HocmaiBackendController@postNotifySaveNotSend');
    //Step5: api gửi notify tới firbase
    Route::post('notify/create/step5', 'HocmaiBackendController@postNotifyCreateStep5');

    //test
    Route::post('notify/test', 'HocmaiBackendController@postNotifyTest');

    //import file excel cac device_token
    Route::post('notify/import', 'HocmaiBackendController@postNotifyImport');
    //get device_token by user hocmai_id
    Route::post('device_token/user_hocmai_id', 'HocmaiBackendController@postDeviceTokenUserHocmaiId');
    //api danh sach app
    Route::get('app/list', 'HocmaiBackendController@getAppList');
    //danh sach notify
    Route::get('notify-list', 'HocmaiBackendController@getNotifyList')->middleware('cors');
;
});