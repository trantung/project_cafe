<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiBackendService;
use Illuminate\Http\Request;
use APV\Hocmai\Models\HocmaiLivestream;
use APV\Hocmai\Models\HocmaiNotifyDevice;
use APV\Hocmai\Models\HocmaiNotifyImport;
use APV\Hocmai\Models\HocmaiExportUser;
use APV\Hocmai\Models\HocmaiExportToken;
use APV\Hocmai\Constants\HocmaiDataConst;
use Maatwebsite\Excel\Facades\Excel;
/**
 * Class HocmaiBackendController
 * @package APV\Promotion\Http\Controllers\API
 * @property HocmaiBackendService $backend
 */
class HocmaiBackendController extends ApiBaseController
{
    public function __construct(HocmaiBackendService $backend)
    {
        $this->backend = $backend;
    }

    public function getFilterList(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->getFilterList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function getContextList(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->getContextList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function demo()
    {
        $data = [
            [
                'hocmai_livestream_id' => 163,
                'name' => 'Học Tiếng Anh',
                'school_block_id' => 1,
            ],
            [
                'hocmai_livestream_id' => 162,
                'name' => 'Phân tích cấu trúc đề thi và định hướng phương pháp ôn thi Tiếng Anh vào 10 đạt hiệu quả',
                'school_block_id' => 3,
            ],
            [
                'hocmai_livestream_id' => 161,
                'name' => 'Lộ trình tự học môn Ngữ văn 9 và định hướng ôn thi vào 10',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 160,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 8',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 159,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt Ngữ văn 6',
                'school_block_id' => 2,
            ],
            [
                'livestream_id' => 158,
                'name' => 'Định hướng lộ trình tự học môn Toán 9 và chuẩn bị thi vào 10',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 156,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 7',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 154,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 6',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 153,
                'name' => 'Live hoạt hình',
                'school_block_id' => 1,
            ],
        ];
        foreach ($data as $value)
        {
            HocmaiLivestream::create($value);
        }
        dd(111);
    }

    public function postNotifyCreateStep1(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->postNotifyCreateStep1($input);
        return $this->sendSuccess($data, 'success');
    }

    public function postNotifyCreateStep2(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->postNotifyCreateStep2($input);
        return $this->sendSuccess($data, 'success');
    }

    public function postNotifyCreateStep3(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->postNotifyCreateStep3($input);
        return $this->sendSuccess($data, 'success');
    }

    public function postNotifyTest(Request $request)
    {
        $input = $request->all();
        $data = [];
//        $listDevice = $this->backend->prepareData($input);
//        dd($listDevice);
        $listDevice = [
            'f_otCxA1a2U:APA91bFMSz5apCOk_spB1EHf2K41QqAFODkz4fYPdtErsFBaocS3FEjmBzd9Oh8MdX4SAWU2X7V19QJbK0_R2TV2JSNJWFqawJxkKbCNIOLbkBGZiCV7sI31kAjrcIapjeo5GeZOfcKO', 'dz7t6wS0ui8:APA91bEkR2aq7B2RAdsw37VFLV2skbOe8DLrZOxZDGhESdptcAkT2VyK2K8aO0jMrP_2rk4nC6bLiOPqJkUOjpZ81QqE4fl8XOsGH3c7nAC9itIhatum8n0Oew7TgN_j927MTUnozLjt'];
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $notification = [
            'title' => 'title',
            'body' => 'body',
            'icon' => 'icon',
            'sound' => 'sound',
            'badge' => 0,
        ];
        $token = 'f_otCxA1a2U:APA91bFMSz5apCOk_spB1EHf2K41QqAFODkz4fYPdtErsFBaocS3FEjmBzd9Oh8MdX4SAWU2X7V19QJbK0_R2TV2JSNJWFqawJxkKbCNIOLbkBGZiCV7sI31kAjrcIapjeo5GeZOfcKO';
        $extraNotificationData = ['action_type' => 1];
        $fcmNotification = [
//	    	'registration_ids' => $listDevice,
            'to' => $token,
            'notification' => $notification,
            'data' => $extraNotificationData
        ];

        $headers = [
            'Authorization: key=' . HocmaiDataConst::API_ACCESS_KEY,
            'Content-Type: application/json'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
        dd(json_decode($result)->failure);
        dd(json_decode($result)->failure);
        return $this->sendSuccess($data, 'success');
    }

    public function postNotifyPrepare(Request $request)
    {
        $input = $request->all();
//        dd($input);
        $notifyId = $input['notify_id'];
//        dd($notifyId);
        $listDevice = $this->backend->prepareData($notifyId);
        dd(count($listDevice));
    }

    public function postNotifyCreateStep4(Request $request)
    {
        $input = $request->all();
         $upData['sound'] = $input['sound'];
         $upData['ios_badge'] = $input['ios_badge'];
         $upData['action_type'] = $upData['context_id'] = $input['context']['action_type'];
         $upData['expire'] = $this->backend->setContextExpire($input['expire']);
         $upData['detail'] = $this->backend->setContextDetail($input['context']);
        if (!isset($input['sound'])) {
            $input['sound'] = 0;
        }
        if (!isset($input['ios_badge'])) {
            $input['ios_badge'] = 0;
        }

        $data = $this->backend->postNotifyCreateStep4($input);
        $notifyId = $input['notify_id'];
        $import = null;

        //Lấy danh sách các device_token cần để gửi lên firebase
        if (isset($input['import']) && $input['import'] == 1) {
            $import = $input['import'];
            $listDevice = $this->backend->getListDeviceByImport($notifyId);
        } else {
            $listDevice = $this->backend->prepareData($notifyId);
        }
        $data = ['number_device_tokens' => count($listDevice)];
//        $this->commonSendNotifyToFirebase($listDevice, $notifyId, $import);
        return $this->sendSuccess($data, 'success');
    }
    public function postNotifySaveNotSend(Request $request)
    {
        $input = $request->all();
        $notifyId = $input['notify_id'];
        $this->backend->prepareData($notifyId);
        $this->backend->postNotifySaveNotSend($notifyId);
        return $this->sendSuccess([], 'success');
    }

    public function postNotifyCreateStep5(Request $request)
    {
        $input = $request->all();
        if (!isset($input['notify_id']) || empty($input['notify_id'])) {
            dd('thieu notify_id');
        }
        $time_start = microtime(true);
        $notifyId = $input['notify_id'];
//        $listDevice = $this->backend->getListDeviceTokens($notifyId);
//        $number_device_tokens = count($listDevice);
//        $inputListDevice = array_chunk($listDevice, HocmaiDataConst::LIMIT_SENT_FIREBASE);
//        $input['title'] = $this->backend->getTitleNotify($notifyId);
//        $input['body'] = $this->backend->getBodyNotify($notifyId);
//        $input['icon'] = $this->backend->getIconNotify($notifyId);
//        $extraNotificationData = $this->backend->formatDataNotify($notifyId, $input['title'], $input['body']);
//        $successNotify = $failureNotify = 0;
//        foreach ($inputListDevice as $key => $listDevice) {
//            $response = $this->commonSendNotifyToFirebaseAll($listDevice, $input, $extraNotificationData);
//            $successNotify = $successNotify + $response['success'];
//            $failureNotify = $failureNotify + $response['failure'];
//        }
////        $this->commonSendNotifyToFirebase($listDevice, $notifyId);
//        $this->backend->updateNotifySuccess($notifyId, $failureNotify, $successNotify);

        \Artisan::call('word', ['notifyId' => "{$notifyId}"]);


//        $time_end = microtime(true);
//        $execution_time = $time_end - $time_start;
//        $data['number_device_tokens'] = $number_device_tokens;
        $data['notify_id'] = $notifyId;
//        $data['success'] = $successNotify;
//        $data['failure'] = $failureNotify;
//        $data['execution_time'] = $execution_time . 'giây';
//        $data['sent_error'] = count($this->backend->getListDeviceTokensError($notifyId));
//        $data['sent_fail'] = count($this->backend->getListDeviceTokensSentFail($notifyId));
//        $data['sent_success'] = count($this->backend->getListDeviceTokensSentSuccess($notifyId));
        return $this->sendSuccess($data, 'success');
    }

    public function commonSendNotifyToFirebaseAll($listDevice, $input, $extraNotificationData)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $sound = $iosBadge = 0;
        $notification = [
            'title' => $input['title'],
            'body' => $input['body'],
        ];
        $headers = [
            'Authorization: key=' . HocmaiDataConst::API_ACCESS_KEY,
            'Content-Type: application/json'
        ];

        $fcmNotification = [
            'registration_ids' => $listDevice,
            'notification' => $notification,
            'data' => $extraNotificationData
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($result);
        $data['success'] = $response->success;
        $data['failure'] = $response->failure;
        return $data;
    }

    public function commonSendNotifyToFirebase($listDevice, $notifyId, $import = null)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $title = $this->backend->getTitleNotify($notifyId);
        $body = $this->backend->getBodyNotify($notifyId);
        $icon = $this->backend->getIconNotify($notifyId);
        $sound = $iosBadge = 0;
        if (!$import) {
            $sound = $this->backend->getSoundNotify($notifyId);
        }
        if (!$import) {
            $iosBadge = $this->backend->getIosBadgeNotify($notifyId);
        }
        $notification = [
            'title' => $title,
            'body' => $body,
            'icon' => $icon,
            // 'sound' => $sound,
            // 'badge' => $iosBadge,
        ];
        $extraNotificationData = $this->backend->formatDataNotify($notifyId, $title, $body, $import);
        $headers = [
            'Authorization: key=' . HocmaiDataConst::API_ACCESS_KEY,
            'Content-Type: application/json'
        ];
        $failureNotify = $successNotify = 0;
        foreach ($listDevice as $token)
        {
            $fcmNotification = [
//            'registration_ids' => $listDevice,
                'to' => $token,
                'notification' => $notification,
                'data' => $extraNotificationData
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$fcmUrl);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
            $result = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($result);
            $failure = $response->failure;
            $success = $response->success;
            if ($failure != 0) {
                $failureNotify = $failureNotify + 1;
                $this->backend->updateNotifyDevice($notifyId, $token, true);
            }
            if ($success != 0) {
                $this->backend->updateNotifyDevice($notifyId, $token);
                $successNotify = $successNotify + 1;
            }
        }
        //update notify with status = 1(up thanh cong)
        $this->backend->updateNotifySuccess($notifyId, $failureNotify, $successNotify);
        return true;
    }

    public function postNotifyImport(Request $request)
    {
        $input = $request->all();
        $notifyId = $input['notify_id'];
        $listDevice = [];
        if($request->hasFile('file')) {
            $data = Excel::toArray(new HocmaiNotifyImport, request()->file('file'));
            foreach ($data[0] as $key => $value) {
                if (isset($value[0])) {
                    $listDevice[] = $value[0];
                }
            }
        }
        $this->backend->saveDeviceBeforeSend($listDevice, $notifyId);
        return $this->sendSuccess(['notify_id' => $notifyId], 'success');
    }

    public function postDeviceTokenUserHocmaiId(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->postDeviceTokenUserHocmaiId($input);
        return $this->sendSuccess($data, 'success');
    }

    public function getAppList(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->getAppList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function getNotifyList(Request $request)
    {
        $data = $this->backend->getNotifyList();
        return $this->sendSuccess($data, 'success');
    }

    public function postNotifySendHandle(Request $request)
    {
        $input = $request->all();
        $notifyId = $input['notify_id'];
        $listDevice = $this->backend->postNotifySendHandle($input);
        if (isset($input['handle']) && $input['handle'] == 1) {
            $this->commonSendNotifyToFirebase($listDevice, $notifyId);
        }
        $res = [
            'count' => count($listDevice),
            'list_device_token' => $listDevice,
        ];
//         var_dump('<pre>');
//         var_dump(count($data));
//         var_dump('</pre>');
//         var_dump('<pre>');
//         dd($data);
//         var_dump('</pre>');
        return $this->sendSuccess($res, 'success');
    }

    public function sendAllNotify($input, $listDevice)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $title = $input['title'];
        $body = $input['body'];
        $action_type = $input['action_type'];
        $notification = [
            'title' => $title,
            'body' => $body,
        ];
        $extraNotificationData['title'] = $title;
        $extraNotificationData['body'] = $body;
        $extraNotificationData['action_type'] = $action_type;
        $headers = [
            'Authorization: key=' . HocmaiDataConst::API_ACCESS_KEY,
            'Content-Type: application/json'
        ];
        $fcmNotification = [
            'registration_ids' => $listDevice,
            'notification' => $notification,
            'data' => $extraNotificationData
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($result);
        $data['success'] = $response->success;
        $data['failure'] = $response->failure;
        return $data;
    }

    public function postNotifyHandleClass(Request $request)
    {
        $input = $request->all();
        $time_start = microtime(true);
        $listDevice = $this->backend->postNotifyHandleClass($input);
        if (isset($input['confirm']) && $input['confirm'] == 1) {
            $response = $this->sendAllNotify($input, $listDevice);
            $res = [
                'count' => count($listDevice),
                'success' => $response->success,
                'fail' => $response->failure,
            ];
            return $this->sendSuccess($res, 'success');
        }
        $time_end = microtime(true);
        $execution_time = $time_end - $time_start;
        $res['count'] = count($listDevice);
        $res['execution_time'] = $execution_time . ' giay';
        $res['data'] = $listDevice;
        return $this->sendSuccess($res, 'success');
    }

    public function testSendAllNotify(Request $request)
    {
        $time_start = microtime(true);
        $input = $request->all();
        $listDevice = [];
        for ($i = 0; $i <= $input['loop']; $i++) {
            $listDevice[$i] = generateRandomString(152);
        }
        $number_device_tokens =  count($listDevice);
        $inputListDevice = array_chunk($listDevice, HocmaiDataConst::LIMIT_SENT_FIREBASE);
        $successNotify = $failureNotify = 0;
        foreach ($inputListDevice as $listDevice) {
            $response = $this->sendAllNotify($input, $listDevice);
            $successNotify = $successNotify + $response['success'];
            $failureNotify = $failureNotify + $response['failure'];
        }

        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start)/60;
        $data = [
            'success' => $successNotify,
            'failure' => $failureNotify,
            'number_device_tokens' => $number_device_tokens,
            'execution_time' => $execution_time,
        ];
        return $this->sendSuccess($data, 'success');
    }

    public function postInfoUserByToken(Request $request)
    {
        $input = $request->all();
        $res = $this->backend->postInfoUserByToken($input);
        return $this->sendSuccess($res, 'success');
    }
    
    public function postUpdateTokenUser(Request $request)
    {
        $input = $request->all();
        $res = $this->backend->postUpdateTokenUser($input);
        return $this->sendSuccess($res, 'success');
    }
    
    public function postNotifyImportUserId(Request $request)
    {
        $input = $request->all();
        $listUser = [];
        if($request->hasFile('file')) {
            $data = Excel::toArray(new HocmaiExportUser, request()->file('file'));
            foreach ($data[0] as $key => $value) {
                if (isset($value[0])) {
                    $listUser[] = $value[0];
                }
            }
        }
        $res = $this->backend->createTokenExport($listUser);
        return $this->sendSuccess($res, 'success'); 
//        $exportToken = new HocmaiExportToken();
//        $exportToken->listUser = $listUser;
////        $this->backend->getListDeviceByListUser($listUser);
//        return Excel::download($exportToken, 'users.xlsx');
////        return $this->sendSuccess(['notify_id' => $notifyId], 'success');
    }
    
    public function getExportToken(Request $request)
    {
        return Excel::download(new HocmaiExportToken, 'token.xlsx');
    }
}
