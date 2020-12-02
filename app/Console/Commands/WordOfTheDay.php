<?php

namespace App\Console\Commands;

use APV\Hocmai\Constants\HocmaiDataConst;
use APV\Hocmai\Models\HocmaiNotify;
use Illuminate\Console\Command;
use APV\Hocmai\Services\HocmaiBackendService;
use APV\Hocmai\Models\HocmaiNotifyDevice;
/**
 * Class WordOfTheDay
 * @property HocmaiBackendService $backend
 */
class WordOfTheDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'word {notifyId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notify daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(HocmaiBackendService $backend)
    {
        parent::__construct();
        $this->backend = $backend;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //cron
        $notifyId = $this->argument('notifyId');
//        $id = HocmaiNotify::create(['title' => 'tunglaso' . $notifyId])->id;
//        for ($i = 0; $i <= 20000; $i++) {
//            $listDevice[$i] = generateRandomString(152);
//        }
//        $inputListDevice = array_chunk($listDevice, HocmaiDataConst::LIMIT_SENT_FIREBASE);
//        $successNotify = $failureNotify = 0;
//        $input['title'] = 'title';
//        $input['body'] = 'body';
//        $input['action_type'] = 1;
//        $successNotify = $failureNotify = 0;
//        foreach ($inputListDevice as $listDevice) {
//            $response = $this->sendNofityToFirebase($input, $listDevice);
//            $successNotify = $successNotify + $response['success'];
//            $failureNotify = $failureNotify + $response['failure'];
//        }
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
//        curl_setopt($ch, CURLOPT_POST, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
//        $result = curl_exec($ch);
//        curl_close($ch);
//        $response = json_decode($result);
//        $data['success'] = $response->success;
//        $data['failure'] = $response->failure;



        $listDevice = $this->backend->getListDeviceTokens($notifyId);
        $number_device_tokens = count($listDevice);
        $inputListDevice = array_chunk($listDevice, HocmaiDataConst::LIMIT_SENT_FIREBASE);
        $input['title'] = $this->backend->getTitleNotify($notifyId);
        $input['body'] = $this->backend->getBodyNotify($notifyId);
        $input['icon'] = $this->backend->getIconNotify($notifyId);
        $extraNotificationData = $this->backend->formatDataNotify($notifyId, $input['title'], $input['body']);
        $successNotify = $failureNotify = 0;
        foreach ($inputListDevice as $key => $listDevice) {
            $response = $this->sendNofityToFirebase($input, $listDevice, $extraNotificationData);
            $successNotify = $successNotify + $response['success'];
            $failureNotify = $failureNotify + $response['failure'];
        }
        HocmaiNotify::find($notifyId)->update(['success' => $successNotify, 'failure' => $failureNotify]);
        return true;
    }
    
    public function sendNofityToFirebase($input, $listDevice, $extraNotificationData)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $title = $input['title'];
        $body = $input['body'];
        $notification = [
            'title' => $title,
            'body' => $body,
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
    public function getListNotifyId()
    {
//        $list = HocmaiNotifyDevice::where('status', HocmaiDataConst::BEFORE_SENT_BIG_DATA)->groupBy('notify_id')->pluck('notify_id')->toArray();
        $list = HocmaiNotifyDevice::where('status', HocmaiDataConst::BEFORE_SENT_BIG_DATA)->get();
        foreach($list as $value)
        {

        }
        return $list;
    }

    public function sendNotify()
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
}
