<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiBackendService;
use Illuminate\Http\Request;
/**
 * Class PromotionApiController
 * @package APV\Promotion\Http\Controllers\API
 * @property HocmaiBackendService $hocmaiBackendService
 */
class HocmaiBackendController extends ApiBaseController
{
    public function __construct(HocmaiBackendService $hocmaiBackendService)
    {
        $this->hocmaiBackendService = $hocmaiBackendService;
    }

    public function getFilterList(Request $request)
    {
        $input = $request->all();
        $data = $this->hocmaiBackendService->getFilterList($input);
        return $this->sendSuccess($data, 'success');
    }


}
