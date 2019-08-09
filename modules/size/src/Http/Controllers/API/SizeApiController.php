<?php
namespace APV\Size\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Size\Services\SizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Size\Constants\SizeResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class SizeApiController
 * @package APV\Size\Http\Controllers\API
 */
class SizeApiController extends ApiBaseController
{
    public function __construct(SizeService $sizeService, ApiAuth $apiAuth)
    {
        $this->sizeService = $sizeService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->sizeService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('size', 'postCreate')) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->sizeService->create($input);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($sizeId)
    {
        $data = $this->sizeService->getDetail($sizeId);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $sizeId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('size', 'postEdit')) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->sizeService->postEdit($sizeId, $input);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $sizeId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('size', 'postDelete')) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->sizeService->postDelete($sizeId);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }
    //config size_product
    
    //param: product_id
    public function getListSizeProduct(Request $request, $sizeId, $productId)
    {
        $input = $request->all();
        $data = $this->sizeService->getListSizeProduct($input, $sizeId);
        return $this->sendSuccess($data, 'success');
    }
    /**
     * postCreateSizeProduct: config giá tiền 1 sản phẩm với 1 size cùng thuộc tính default là giá niêm yết(hiển thị ra màn hình client)
     * @param  Request $request [description]
     * @param  [type]  $sizeId  [description]
     * @return [type]           [description]
     */
    public function postCreateSizeProduct(Request $request, $sizeId, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('size', 'postCreateSizeProduct')) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->sizeService->createSizeProduct($input, $sizeId);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetailSizeProduct($sizeId, $productId)
    {
        $data = $this->sizeService->getDetailSizeProduct($sizeId, $productId);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_DETAIL);
        }
        return $this->sendSuccess($data, 'Detail success');
    }
    //param: product_id, price, status
    public function postEditSizeProduct(Request $request, $sizeId, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('size', 'postEditSizeProduct')) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->sizeService->postEditSizeProduct($sizeId, $input);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_EDIT);
        }
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDeleteSizeProduct(Request $request, $sizeId, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('size', 'postDeleteSizeProduct')) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->sizeService->postDeleteSizeProduct($sizeId);
        if (!$data) {
            return $this->sendError(SizeResponseCode::ERROR_CODE_DELETE);
        }
        return $this->sendSuccess($data, 'Delete success');
    }

}
