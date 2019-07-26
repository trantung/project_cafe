<?php
namespace APV\Frontend\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Category\Services\CategoryService;
use APV\Product\Services\ProductService;
use APV\User\Services\UserService;
use Illuminate\Http\JsonResponse;

/**
 * Class FrontendApiController
 * @package APV\Frontend\Http\Controllers\API
 */
class FrontendApiController extends ApiBaseController
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * @var CategoryService
     */
    protected $categoryService;

    /**
     * @var ProductService
     */
    protected $productService;


    /**
     * FrontendApiController constructor.
     * @param UserService $userService
     * @param ProductService $productService
     * @param CategoryService $categoryService
     */
    public function __construct(
        UserService $userService,
        ProductService $productService,
        CategoryService $categoryService
    ) {
        $this->userService = $userService;
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    /**
     * Get home page
     * @return JsonResponse
     */
    public function getHomePage()
    {
        $preparedData = [
            'newProductList' => $this->productService->getNewProductList(),
            'productListByRootCategory' => $this->productService->getProductListGroupByRootCategory(),
        ];

        return $this->sendSuccess($preparedData);
    }
}
