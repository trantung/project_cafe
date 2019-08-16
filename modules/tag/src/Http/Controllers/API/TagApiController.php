<?php
namespace APV\Tag\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Tag\Services\TagService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Tag\Constants\TagResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class TagApiController
 * @package APV\Tag\Http\Controllers\API
 */
class TagApiController extends ApiBaseController
{
    public function __construct(TagService $tagService, ApiAuth $apiAuth)
    {
        $this->tagService = $tagService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->tagService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('tag', 'postCreate')) {
            return $this->sendError(TagResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tagService->create($input);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($tagId)
    {
        $data = $this->tagService->getDetail($tagId);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $tagId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('tag', 'postEdit')) {
            return $this->sendError(TagResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tagService->postEdit($tagId, $input);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $tagId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('tag', 'postDelete')) {
            return $this->sendError(TagResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tagService->postDelete($tagId);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }
    //config Tag_product
    
    //param: product_id
    public function getListTagProduct(Request $request, $tagId)
    {
        $input = $request->all();
        $data = $this->tagService->getListTagProduct($input, $tagId);
        return $this->sendSuccess($data, 'success');
    }
    /**
     * 
     * @param  Request $request [description]
     * @param  [type]  $tagId  [description]
     * @return [type]           [description]
     */
    public function postCreateTagProduct(Request $request, $tagId, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('tag', 'postCreateTagProduct')) {
            return $this->sendError(TagResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tagService->createTagProduct($input, $tagId, $productId);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetailTagProduct($tagId, $productId)
    {
        $data = $this->tagService->getDetailTagProduct($tagId, $productId);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }
    //param: product_id, price, status
    public function postEditTagProduct(Request $request, $tagId, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('tag', 'postEditTagProduct')) {
            return $this->sendError(TagResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tagService->postEditTagProduct($input, $tagId, $productId);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDeleteTagProduct($tagId, $productId)
    {
        // $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('tag', 'postDeleteTagProduct')) {
            return $this->sendError(TagResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->tagService->postDeleteTagProduct($tagId, $productId);
        if (!$data) {
            return $this->sendError(TagResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }

}
