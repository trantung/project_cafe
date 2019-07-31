<?php
namespace APV\Table\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Table\Services\TableService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Table\Constants\TableResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class TableApiController
 * @package APV\Table\Http\Controllers\API
 */
class TableApiController extends ApiBaseController
{
    public function __construct(TableService $tableService, ApiAuth $apiAuth)
    {
        $this->tableService = $tableService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->tableService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('table', 'postCreate')) {
            return $this->sendError(TableResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tableService->create($input);
        if (!$data) {
            return $this->sendError(TableResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($tableId)
    {
        $data = $this->tableService->getDetail($tableId);
        if (!$data) {
            return $this->sendError(TableResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $tableId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('table', 'postEdit')) {
            return $this->sendError(TableResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tableService->postEdit($tableId, $input);
        if (!$data) {
            return $this->sendError(TableResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $tableId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('table', 'postDelete')) {
            return $this->sendError(TableResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tableService->postDelete($tableId);
        if (!$data) {
            return $this->sendError(TableResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }

    
}
