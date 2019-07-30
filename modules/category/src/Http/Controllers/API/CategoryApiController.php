<?php
namespace APV\Category\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Category\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\User\Constants\UserResponseCode;
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

    public function getList()
    {
        $data = $this->categoryService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('category', 'postCreate')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->categoryService->createCategory($input);
        if (!$data) {
            return $this->sendError(UserResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($categoryId)
    {
        $data = $this->categoryService->getDetail($categoryId);
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $categoryId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('category', 'postEdit')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->categoryService->postEdit($categoryId, $input);
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $categoryId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('category', 'postDelete')) {
            return $this->sendError(UserResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->categoryService->postDelete($categoryId);
        return $this->sendSuccess($data, 'Delete success');
    }

    
}
