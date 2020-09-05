<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiBackendService;
use Illuminate\Http\Request;
/**
 * Class PromotionApiController
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


}
