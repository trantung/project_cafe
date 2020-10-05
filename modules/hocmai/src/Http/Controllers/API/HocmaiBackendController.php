<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiBackendService;
use Illuminate\Http\Request;
use APV\Hocmai\Models\HocmaiLivestream;
use APV\Hocmai\Models\HocmaiNotifyDevice;
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
            'fctq6fdwQQuKMhrKzM42ZTE:APA91bGBAnVNDULQl_BKn2wB-181PvlM03P8MgdTwIpxSA0_Z8YpbiJ83UpOLDW3g2p1cV2HjB7BSsNs7qwtIC_RbTcsIFKX0mtEpljJh3f6Ne_JxdCqBZZBbnElvKey_tY4G4iUKmB3','ctq6fdwQQuKMhrKzM42ZTE:APA91bGBAnVNDULQl_BKn2wB-181PvlM03P8MgdTwIpxSA0_Z8YpbiJ83UpOLDW3g2p1cV2HjB7BSsNs7qwtIC_RbTcsIFKX0mtEpljJh3f6Ne_JxdCqBZZBbnElvKey_tY4G4iUKB4' ];
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $notification = [
            'title' => 'title',
            'body' => 'body',
            'icon' => 'icon',
            'sound' => 'sound',
            'badge' => 0,
        ];
        $extraNotificationData = [
            "message" => $notification,
            "moredata" => [
                'action_type' => 1,
            ]
        ];
        $fcmNotification = [
	    	'registration_ids' => $listDevice,
           // 'to'        => 'ctq6fdwQQuKMhrKzM42ZTE:APA91bGBAnVNDULQl_BKn2wB-181PvlM03P8MgdTwIpxSA0_Z8YpbiJ83UpOLDW3g2p1cV2HjB7BSsNs7qwtIC_RbTcsIFKX0mtEpljJh3f6Ne_JxdCqBZZBbnElvKey_tY4G4iUKmB3', //single token
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
        dd(json_decode($result));
        return $this->sendSuccess($data, 'success');
    }

    public function postNotifyCreateStep4(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->postNotifyCreateStep4($input);
        $notifyId = $data['notify_id'];
        //Lấy danh sách các device_token cần để gửi lên firebase
        $listDevice = $this->backend->prepareData($notifyId);
        $this->commonSendNotifyToFirebase($listDevice, $notifyId);
//        //Format dữ liệu trước khi gửi lên firebase
//        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
//        $title = $this->backend->getTitleNotify($notifyId);
//        $body = $this->backend->getBodyNotify($notifyId);
//        $icon = $this->backend->getIconNotify($notifyId);
//        $sound = $this->backend->getSoundNotify($notifyId);
//        $iosBadge = $this->backend->getIosBadgeNotify($notifyId);
//        $notification = [
//            'title' => $title,
//            'body' => $body,
//            'icon' => $icon,
//            'sound' => $sound,
//            'badge' => $iosBadge,
//        ];
//        $extraNotificationData = ["message" => $notification,"moredata" => $this->backend->formatDataNotify($notifyId, $title, $body)];
//        $fcmNotification = [
//            'registration_ids' => $listDevice,
////            'to'        => $token, //single token
//            'notification' => $notification,
//            'data' => $extraNotificationData
//        ];
//
//        $headers = [
//            'Authorization: key=' . HocmaiDataConst::API_ACCESS_KEY,
//            'Content-Type: application/json'
//        ];
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
//        curl_setopt($ch, CURLOPT_POST, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
//        $result = curl_exec($ch);
//        curl_close($ch);
//        //update notify with status = 1(up thanh cong)
//        $this->backend->updateNotifySuccess($notifyId);

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
        $extraNotificationData = ["message" => $notification,"moredata" => $this->backend->formatDataNotify($notifyId, $title, $body, $import)];
        $fcmNotification = [
            'registration_ids' => $listDevice,
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
        $response = json_decode($result);
        $failure = $response->failure;
        $success = $response->success;
        //update notify with status = 1(up thanh cong)
        $this->backend->updateNotifySuccess($notifyId, $failure, $success);
        return true;
    }

    public function postNotifyImport(Request $request)
    {
        $input = $request->all();
        $notifyId = $input['notify_id'];
        $listDevice = [];
        $path = $request->file('file')->getRealPath();
        $data =  Excel::load($path, function ($reader) {
            $reader->noHeading();
        })->get()->toArray();
        foreach ($data as $key => $value) {
            $listDevice[] = $value[0];
        }
        foreach ($listDevice as $deviceToken)
        {
            HocmaiNotifyDevice::create(['notify_id' => $notifyId, 'device_token' => $deviceToken, 'status' => HocmaiDataConst::UPLOAD_FIREBASE_SUCCESS]);
        }
        $this->commonSendNotifyToFirebase($listDevice, $notifyId, true);
        return $this->sendSuccess([], 'success');
    }
}
