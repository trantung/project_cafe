<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiBackendService;
use Illuminate\Http\Request;
use APV\Hocmai\Models\HocmaiLivestream;
use APV\Hocmai\Models\HocmaiNotifyDevice;
use APV\Hocmai\Models\HocmaiNotifyImport;
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

    public function postNotifyCreateStep4(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->postNotifyCreateStep4($input);
        $notifyId = $data['notify_id'];
        $import = null;
        //Lấy danh sách các device_token cần để gửi lên firebase
        if (isset($input['import']) && $input['import'] == 1) {
            $import = $input['import'];
            $listDevice = $this->backend->getListDeviceByImport($notifyId);
        } else {
            $listDevice = $this->backend->prepareData($notifyId);
        }
        $listDevice = ['f_otCxA1a2U:APA91bFMSz5apCOk_spB1EHf2K41QqAFODkz4fYPdtErsFBaocS3FEjmBzd9Oh8MdX4SAWU2X7V19QJbK0_R2TV2JSNJWFqawJxkKbCNIOLbkBGZiCV7sI31kAjrcIapjeo5GeZOfcKO'];
        $this->commonSendNotifyToFirebase($listDevice, $notifyId, $import);
        return $this->sendSuccess($data, 'success');
    }

    public function commonSendNotifyToFirebase($listDevice, $notifyId, $import = null)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $title = $this->backend->getTitleNotify($notifyId);
        $body = $this->backend->getBodyNotify($notifyId);
        $icon = $this->backend->getIconNotify($notifyId);
        $sound = $iosBadge = false;
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
            'sound' => $sound,
            'badge' => $iosBadge,
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
                $listDevice[] = $value[0];
            }
        }
        $this->backend->saveDeviceBeforeSend($listDevice, $notifyId);
        return $this->sendSuccess(['notify_id' => $notifyId], 'success');
    }


}
