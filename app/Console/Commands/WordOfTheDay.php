<?php

namespace App\Console\Commands;

use APV\Hocmai\Constants\HocmaiDataConst;
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
    protected $signature = 'word:run {notifyId}';

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
    public function __construct()
    {
        parent::__construct();
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
        dd($notifyId);
        $listNotifyId = $this->getListNotifyId();
        foreach ($listNotifyId as $notifyId)
        {

        }
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
