<?php
namespace APV\Product\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Product\Services\ProductService;
use Illuminate\Http\Request;
use APV\Base\Services\ApiAuth;
use APV\Product\Constants\ProductResponseCode;
/**
 * Class ProductApiController
 * @package APV\Product\Http\Controllers\API
 */
class ProductApiController extends ApiBaseController
{
     public function __construct(ProductService $productService, ApiAuth $apiAuth)
    {
        $this->productService = $productService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->productService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postCreate(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('product', 'postCreate')) {
            return $this->sendError(ProductResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->productService->create($input);
        if (!$data) {
            return $this->sendError(ProductResponseCode::ERROR_CODE_UNCREATE_NEW);
        }
        return $this->sendSuccess($data, 'Create success');
    }

    public function getDetail($productId)
    {
        $data = $this->productService->getDetail($productId);
        return $this->sendSuccess($data, 'Detail success');
    }

    public function postEdit(Request $request, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('product', 'postEdit')) {
            return $this->sendError(ProductResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->productService->edit($productId, $input);
        return $this->sendSuccess($data, 'Edit success');
    }

    public function postDelete(Request $request, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('product', 'postDelete')) {
            return $this->sendError(ProductResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->productService->delete($productId);
        return $this->sendSuccess($data, 'Delete success');
    }
    public function postCreateProductTopping(Request $request, $productId)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('product', 'postDelete')) {
            return $this->sendError(ProductResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->productService->createProductTopping($productId, $input);
        return $this->sendSuccess($data, 'Delete success');
    }
    
}
