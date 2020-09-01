<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiService;
use Illuminate\Http\Request;
use APV\Base\Services\ApiAuth;
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

}
