<?php

namespace App\Console\Commands;

use APV\Hocmai\Constants\HocmaiDataConst;
use APV\Hocmai\Models\HocmaiNotify;
use Illuminate\Console\Command;
use APV\Hocmai\Services\HocmaiBackendService;
use APV\Hocmai\Models\HocmaiNotifyDevice;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

/**
 * Class WordOfTheDay
 * @property HocmaiBackendService $backend
 */
class WordOfTheDay extends Command
{
    const PROCESS = 10;
    const WORKER_DELAY = 15;
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
    
    public static function resetMaxExecutionTime()
    {
        try {
            set_time_limit(0);
            ini_set('max_execution_time', 0);
            ini_set('memory_limit', '-1');
        } catch (\Exception $e) {
            Log::channel('email')->info('Cannot reset max_execution_time: ' . $e->getMessage());
        }
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $notifyId = $this->argument('notifyId');
        $listDevice = $this->backend->getListDeviceTokens($notifyId);
        $inputListDevice = array_chunk($listDevice, HocmaiDataConst::LIMIT_SENT_FIREBASE);
        $input['title'] = $this->backend->getTitleNotify($notifyId);
        $input['body'] = $this->backend->getBodyNotify($notifyId);
        $input['icon'] = $this->backend->getIconNotify($notifyId);
        $extraNotificationData = $this->backend->formatDataNotify($notifyId, $input['title'], $input['body']);
        $successNotify = $failureNotify = 0;
//        self::resetMaxExecutionTime();
        $processes = count($inputListDevice);
//        dd($processes);
        foreach ($inputListDevice as $key => $listDevice) {
//            if (extension_loaded('pcntl') && $processes > 1) {
//                Log::channel('email')->info('Run in multi-process mode');
//                $this->runMultiProcesses($input, $listDevice, $extraNotificationData);
//            } else {
//                Log::channel('email')->info('Run in single-process mode');
//                $this->run($input, $listDevice, $extraNotificationData);
//            }
            $this->startCampaign($input, $listDevice, $extraNotificationData, $processes, $notifyId);
//            $response = $this->sendNofityToFirebase($input, $listDevice, $extraNotificationData);
//            $successNotify = $successNotify + $response['success'];
//            $failureNotify = $failureNotify + $response['failure'];
        }
//        HocmaiNotify::find($notifyId)->update(['success' => $successNotify, 'failure' => $failureNotify]);
        return true;
    }
    
    public function startCampaign($input, $listDevice, $extraNotificationData, $processes, $notify)
    {
        self::resetMaxExecutionTime();
        if (extension_loaded('pcntl') && $processes > 1) {
            Log::channel('email')->info('Run in multi-process mode');
            $this->runMultiProcesses($input, $listDevice, $extraNotificationData, $processes, $notify);
        } else {
            Log::channel('email')->info('Run in single-process mode');
            $this->sendNofityToFirebase($input, $listDevice, $extraNotificationData, $notify);
        }
//        $campaign = MarketingCampaign::find($campaign->id);
//        Log::channel('email')->info('Finish campaign `' . $campaign->name . '`');
//        Log::channel('email')->info('campaign total sent `' . $campaign->total_sent . '` + total error ' . $campaign->total_error . ' = quantity ' . $campaign->quantity);
////            $data->content = $content;
//        if ($campaign->total_sent + $campaign->total_error == $campaign->quantity) {
//            $item = Item::where(Item::TYPE, Item::TYPE_EMAIL)->orderBy('id', 'DESC')->first();
//            $moneyUsed = $campaign->total_sent * $item->price;
//            Log::channel('email')->info('Email Campaign Id: ' . $campaign->id . ' Đã sử dụng só tiền: ' . $moneyUsed);
//            $campaign->status = MarketingCampaign::STATUS_SUCCESS;
//            $campaign->money_used = $moneyUsed;
//            $campaign->hold()->update([
//                MarketingCampaignHold::STATUS => MarketingCampaignHold::STATUS_SUCCESS,
//                MarketingCampaignHold::MONEY_USED => $moneyUsed
//            ]);
//            $campaign->createdBy->notify(new BasicNotification(
//                NOTIFY_MARKETING_COMPLETE,
//                'Chiến dịch email marketing ' . limitTo($campaign->name, 20) . ' hoàn tất',
//                'Chiến dịch email marketing ' . $campaign->name . ' đã hoàn tất',
//                $campaign,
//                route('backend.marketing-campaign.detail', $campaign->id),
//                'backend.mail.campaign-complete'
//            ));
//            if ($campaign->total_error > 0 && $campaign->hold->status == MarketingCampaignHold::STATUS_SUCCESS) {
//                $moneyRefund = $campaign->total_error * $item->price;
//                MoneyService::addMoney($campaign->created_by, $moneyRefund, 'Hoàn tiền email marketing không gửi được cho chiến dịch ' . $campaign->name);
//            }
//        }
//        $campaign->save();
    }
    
    public function runMultiProcesses($input, $listDevice, $extraNotificationData, $processes, $notifyId)
    {
        // processes to fork
        $count = $processes;
        $children = [];
        for ($i = 0; $i < $count; $i += 1) {
            $pid = pcntl_fork();
            // for child process only
            if (!$pid) {
                // Reconnect to the DB to prevent connection closed issue when using fork
                DB::reconnect('mysql');
                // Re-initialize logging to capture the child process' PID
                sleep(self::WORKER_DELAY);
                $this->sendNofityToFirebase($input, $listDevice, $extraNotificationData, $notifyId);
                exit($i + 1);
                // end child process
            } else {
                $children[] = $pid;
            }
        }

        // wait for child processes to finish
        foreach ($children as $child) {
            $pid = pcntl_wait($status);
            if (pcntl_wifexited($status)) {
                $code = pcntl_wexitstatus($status);
                Log::channel('email')->info("Child process $pid finished, status code: $code");
            } else {
                Log::channel('email')->warning("Child process $pid did not normally exit");
                $this->error("Child process $pid did not normally exit");
            }
        }
    }
    
    public function sendNofityToFirebase($input, $listDevice, $extraNotificationData, $notifyId)
    {
        $notify = HocmaiNotify::find($notifyId);

        $oldSuccess = $notify->success;
        $oldFailure = $notify->failure;
        if (empty($oldSuccess)) {
            $oldSuccess = 0;
        }
        if (empty($oldFailure)) {
            $oldFailure = 0;
        }
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
        $success = $oldSuccess + $response->success;
        $failure = $oldFailure + $response->failure;
        $updata = [
            'success' => $success,
            'failure' => $failure,
            'status' => HocmaiDataConst::SENT_SUCCESS,
        ];
        $res = HocmaiNotify::where('id', $notifyId)->update($updata);
        HocmaiNotifyDevice::whereIn('device_token', $listDevice)->delete();
        return $res;
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
