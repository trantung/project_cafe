<?php
namespace APV\Topping\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Topping\Services\ToppingService;
use Illuminate\Http\Request;
use APV\Topping\Constants\ToppingResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class ToppingApiController
 * @package APV\Topping\Http\Controllers\API
 */
class ToppingApiController extends ApiBaseController
{
    public function __construct(ToppingService $toppingService, ApiAuth $apiAuth)
    {
        $this->toppingService = $toppingService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->toppingService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('topping', 'postCreate')) {
            return $this->sendError(ToppingResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->toppingService->create($input);
        if (!$data) {
            return $this->sendError(ToppingResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($toppingId)
    {
        $data = $this->toppingService->getDetail($toppingId);
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $toppingId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('topping', 'postEdit')) {
            return $this->sendError(ToppingResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->toppingService->edit($toppingId, $input);
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $toppingId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('topping', 'postDelete')) {
            return $this->sendError(ToppingResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->toppingService->delete($toppingId);
        return $this->sendSuccess($data, 'Delete success');
    }

    
}
