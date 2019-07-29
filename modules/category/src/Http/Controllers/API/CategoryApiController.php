<?php
namespace APV\Category\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Category\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Category\Constants\CategoryDataConsts;
use APV\Base\Services\ApiAuth;
/**
 * Class CategoryApiController
 * @package APV\Category\Http\Controllers\API
 */
class CategoryApiController extends ApiBaseController
{
    public function __construct(CategoryService $categoryService, ApiAuth $apiAuth)
    {
        $this->categoryService = $categoryService;
        $this->apiAuth = $apiAuth;
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermission($input)) {
            return $this->sendError(CategoryDataConsts::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->categoryService->createCategory($input);
        if (!$data) {
            return $this->sendError(CategoryDataConsts::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }
}
