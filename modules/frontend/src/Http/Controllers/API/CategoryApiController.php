<?php
namespace APV\Frontend\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Category\Services\CategoryService;
use Illuminate\Http\JsonResponse;

/**
 * Class CategoryApiController
 * @package APV\Frontend\Http\Controllers\API
 */
class CategoryApiController extends ApiBaseController
{
    /**
     * @var CategoryService
     */
    protected $categoryService;

    /**
     * FrontendApiController constructor.
     * @param CategoryService $categoryService
     */
    public function __construct(
        CategoryService $categoryService
    ) {
        $this->categoryService = $categoryService;
    }

    /**
     * Get root category list
     * @return JsonResponse
     */
    public function getRootCategoryList()
    {
        return $this->sendSuccess($this->categoryService->getRootCategoryList());
    }
}
