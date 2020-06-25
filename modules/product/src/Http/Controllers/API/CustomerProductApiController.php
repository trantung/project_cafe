<?php
namespace APV\Product\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Product\Services\ProductService;
use Illuminate\Http\Request;
use APV\Base\Services\ApiAuth;
/**
 * Class CustomerProductApiController
 * @property ProductService $productService
 */
class CustomerProductApiController extends ApiBaseController
{
     public function __construct(ProductService $productService, ApiAuth $apiAuth)
    {
        $this->productService = $productService;
        $this->apiAuth = $apiAuth;
    }

    public function getList(Request $request)
    {
        $input = $request->all();
        $data = $this->productService->customerGetList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function getDetail(Request $request)
    {
        $input = $request->all();
        $data = $this->productService->customerGetDetail($input);
        return $this->sendSuccess($data, 'Detail success');
    }

    public function addProduct(Request $request)
    {
        $input = $request->all();
        $data = $this->productService->customerAddProduct($input);
        return $this->sendSuccess($data, 'Detail success');
    }
}
