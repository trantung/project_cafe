<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiService;
use Illuminate\Http\Request;
use APV\Base\Services\ApiAuth;
use APV\Hocmai\Constants\HocmaiDataConst;

/**
 * Class PromotionApiController
 * @package APV\Promotion\Http\Controllers\API
 * @property HocmaiService $hocmaiService
 */
class HocmaiController extends ApiBaseController
{
    public function __construct(HocmaiService $hocmaiService, ApiAuth $apiAuth)
    {
        $this->hocmaiService = $hocmaiService;
        $this->apiAuth = $apiAuth;
    }

    public function postAppInfo(Request $request)
    {
        $input = $request->all();
        $data = $this->hocmaiService->postAppInfo($input);
        return $this->sendSuccess($data, 'success');
    }
    public function postUserInfo(Request $request)
    {
        $input = $request->all();
        $data = $this->hocmaiService->postUserInfo($input);
        return $this->sendSuccess($data, 'success');
    }

    public function postCourseList(Request $request)
    {
        $input = $request->all();
        $data = $this->hocmaiService->postCourseList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function postCourseDetail(Request $request)
    {
        $input = $request->all();
        $data = $this->hocmaiService->postCourseDetail($input);
        return $this->sendSuccess($data, 'success');
    }

    public function postLessonDetail(Request $request)
    {
        $input = $request->all();
        $data = $this->hocmaiService->postLessonDetail($input);
        return $this->sendSuccess($data, 'success');
    }
    public function postLogout(Request $request)
    {
        $input = $request->all();
        $data = $this->hocmaiService->postLogout($input);
        return $this->sendSuccess($data, 'success');
    }

    public function getCommonDataSync($url, $method)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                'x-api-key: ' . HocmaiDataConst::API_SYNC,
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $data = json_decode($response)->data;
        return $data;
    }

    public function postSyncUser(Request $request)
    {
        $data = $this->getCommonDataSync('https://api-prod.hocmai.vn/notification/migration/user', 'GET');
        foreach ($data as $key => $value) {
            $hocmaiUserId = $value->user_id;
            $cityId = $value->city_id;
            $deviceToken = $value->token;
            $data = $this->hocmaiService->createNewUserFull($hocmaiUserId, $cityId, $deviceToken);
        }
        return $this->sendSuccess(['sync' => 'ok'], 'success');
    }

    public function postSyncCourseRegist(Request $request)
    {
        $data = $this->getCommonDataSync('https://api-prod.hocmai.vn/notification/migration/packageRegistered', 'GET');
    }

    public function postSyncIapRegist(Request $request)
    {
        $data = $this->getCommonDataSync('https://api-prod.hocmai.vn/notification/migration/IAPPurchased', 'GET');
    }


}
