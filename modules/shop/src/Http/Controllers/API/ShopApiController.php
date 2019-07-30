<?php

namespace APV\Shop\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Base\Services\ApiAuth;
use APV\Shop\Services\ShopService;
use APV\Shop\Constants\ShopDataConst;
use Illuminate\Http\Request;

/**
 * Class ShopApiController
 * @package APV\User\Http\Controllers\API
 */
class ShopApiController extends ApiBaseController
{
    public function __construct(ApiAuth $apiAuth, ShopService $shopService)
    {
        $this->apiAuth = $apiAuth;
        $this->shopService = $shopService;
    }

    public function postCreate(Request $request)
    {
        if (!$this->apiAuth->checkPermissionModule('shop', 'postCreate')) {
            return $this->sendError(ShopDataConst::ERROR_CODE_NO_PERMISSION);
        }
        $input = $request->all();
        $data = $this->shopService->postCreate($input);
        if (!$data) {
            return $this->sendError(ShopDataConst::ERROR_CODE_CREATE);
        }
        return $this->sendSuccess($data, 'Create shop success'); 
    }

    public function postEdit(Request $request, $shopId)
    {
        if (!$this->apiAuth->checkPermissionModule('shop', 'postEdit')) {
            return $this->sendError(ShopDataConst::ERROR_CODE_NO_PERMISSION);
        }
        $input = $request->all();
        $data = $this->shopService->postEdit($shopId, $input);
        if (!$data) {
            return $this->sendError(ShopDataConst::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit shop success');
    }

    public function postDelete($shopId)
    {
        if (!$this->apiAuth->checkPermissionModule('shop', 'postDelete')) {
            return $this->sendError(ShopDataConst::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->shopService->postDelete($shopId);
        if (!$data) {
            return $this->sendError(ShopDataConst::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete shop success');
    }

    public function getList()
    {
        $data = $this->shopService->getList();
        return $this->sendSuccess($data, 'List shop success');
    }

}
