<?php
namespace APV\Level\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Level\Services\LevelService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Level\Constants\LevelResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class LevelApiController
 * @package APV\Level\Http\Controllers\API
 */
class LevelApiController extends ApiBaseController
{
    public function __construct(LevelService $levelService, ApiAuth $apiAuth)
    {
        $this->levelService = $levelService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->levelService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('level', 'postCreate')) {
            return $this->sendError(LevelResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->levelService->createlevel($input);
        if (!$data) {
            return $this->sendError(LevelResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($levelId)
    {
        $data = $this->levelService->getDetail($levelId);
        if (!$data) {
            return $this->sendError(LevelResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $levelId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('level', 'postEdit')) {
            return $this->sendError(LevelResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->levelService->postEdit($levelId, $input);
        if (!$data) {
            return $this->sendError(LevelResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $levelId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('level', 'postDelete')) {
            return $this->sendError(LevelResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->levelService->postDelete($levelId);
        if (!$data) {
            return $this->sendError(LevelResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }

    
}
