<?php
namespace APV\Frontend\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Frontend\Constants\FrontendResponseCode;
use APV\Product\Services\ProductService;
use Illuminate\Http\JsonResponse;

/**
 * Class ProductApiController
 * @package APV\Frontend\Http\Controllers\API
 */
class ProductApiController extends ApiBaseController
{
    /**
     * @var ProductService
     */
    protected $productService;

    /**
     * FrontendApiController constructor.
     * @param ProductService $productService
     */
    public function __construct(
        ProductService $productService
    ) {
        $this->productService = $productService;
    }

    /**
     * Get product detail
     * @param $productId
     * @return JsonResponse
     */
    public function getProductDetail($productId)
    {
        $product = $this->productService->getProductDetail($productId);

        if ($product) {
            return $this->sendSuccess($product);
        }

        return $this->sendError(FrontendResponseCode::ERROR_CODE_NOT_FOUND);
    }
}
