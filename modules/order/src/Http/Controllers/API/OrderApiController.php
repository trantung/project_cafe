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

    public function postCancel(Request $request, $orderId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('order', 'postCancel')) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postCancel($orderId);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_CANCEL);
        }
        return $this->sendSuccess($data, 'Cancel success');
    }

    public function getListSearch(Request $request)
    {
        $input = $request->all();
        $data = $this->orderService->getListSearch($input);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_SEARCH_ORDER);
        }
        return $this->sendSuccess($data, 'success');
    }

    public function getList(Request $request)
    {
        $data = $this->orderService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('order', 'postCreate')) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postCreate($input);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($orderId)
    {
        $data = $this->orderService->getDetail($orderId);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $orderId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('order', 'postEdit')) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postEdit($orderId, $input);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $orderId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('order', 'postDelete')) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postDelete($orderId);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }
    public function postGetValueByQrCodeTable(Request $request, $field)
    {
        $input = $request->all();
        $data = $this->orderService->getTableByQrCode($input['table_qr_code']);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_NOT_TABLE_EXIST);
        }
        return $this->sendSuccess($data->$field, 'Get success');
    }

    public function postChangeStatusOrder($orderId)
    {
        if (!$this->apiAuth->checkPermissionModule('order_change_status', 'postChangeStatusOrder')) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->orderService->postChangeStatusOrder($orderId);
        if (!$data) {
            return $this->sendError(OrderResponseCode::ERROR_CODE_CHANGE_STATUS_ORDER);
        }
        return $this->sendSuccess($data, 'Confirm success');
    }
}
