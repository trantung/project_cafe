<?php
namespace APV\Product\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Product\Services\ProductService;
use Illuminate\Http\Request;

/**
 * Class ProductApiController
 * @package APV\Product\Http\Controllers\API
 */
class ProductApiController extends ApiBaseController
{
    /**
     * @var ProductService
     */
    protected $productService;

    /**
     * ProductApiController constructor.
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Get product by search
     * @return array
     */
    public function search(Request $request)
    {
        $keyword = $request->input();
        $data = $this->productService->searchProduct($keyword);

        return $this->sendSuccess($data);
    }
}
