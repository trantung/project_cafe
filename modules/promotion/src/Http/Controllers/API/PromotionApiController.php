<?php
namespace APV\Promotion\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Promotion\Services\promotionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Promotion\Constants\PromotionResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class PromotionApiController
 * @package APV\Promotion\Http\Controllers\API
 */
class PromotionApiController extends ApiBaseController
{
    public function __construct(PromotionService $promotionService, ApiAuth $apiAuth)
    {
        $this->promotionService = $promotionService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->promotionService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('promotion', 'postCreate')) {
            return $this->sendError(PromotionResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->promotionService->create($input);
        if (!$data) {
            return $this->sendError(PromotionResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($promotionId)
    {
        $data = $this->promotionService->getDetail($promotionId);
        if (!$data) {
            return $this->sendError(PromotionResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $promotionId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('promotion', 'postEdit')) {
            return $this->sendError(PromotionResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->promotionService->postEdit($promotionId, $input);
        if (!$data) {
            return $this->sendError(PromotionResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $promotionId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('promotion', 'postDelete')) {
            return $this->sendError(PromotionResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->promotionService->postDelete($promotionId);
        if (!$data) {
            return $this->sendError(PromotionResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }

}
