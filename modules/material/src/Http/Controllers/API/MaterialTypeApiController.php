<?php
namespace APV\Material\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Material\Services\MaterialService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Material\Constants\MaterialResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class MaterialTypeApiController
 * @package APV\Material\Http\Controllers\API
 */
class MaterialTypeApiController extends ApiBaseController
{
    public function __construct(MaterialService $materialService, ApiAuth $apiAuth)
    {
        $this->materialService = $materialService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->materialService->getListMaterialType();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('material_type', 'postCreate')) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->materialService->postCreateMaterialType($input);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($materialTypeId)
    {
        $data = $this->materialService->getDetailMaterialType($materialTypeId);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $materialTypeId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('material_type', 'postEdit')) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->materialService->postEditMaterialType($materialTypeId, $input);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $materialTypeId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('material_type', 'postDelete')) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->materialService->postDeleteMaterialType($materialTypeId);
        if (!$data) {
            return $this->sendError(MaterialResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }
}
