<?php
namespace APV\Order\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Order\Services\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Order\Constants\OrderResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class OrderApiController
 * @package APV\Order\Http\Controllers\API
 */
class OrderApiController extends ApiBaseController
{
    public function __construct(OrderService $orderService, ApiAuth $apiAuth)
    {
        $this->orderService = $orderService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->orderService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('material', 'postCreate')) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postCreate($input);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($materialId)
    {
        $data = $this->orderService->getDetail($materialId);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $materialId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('material', 'postEdit')) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postEdit($materialId, $input);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $materialId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('material', 'postDelete')) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postDelete($materialId);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }
}
