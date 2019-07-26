<?php
namespace APV\Category\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Category\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class CategoryApiController
 * @package APV\Category\Http\Controllers\API
 */
class CategoryApiController extends ApiBaseController
{
    /**
     * @var CategoryService
     */
    protected $categoryService;

    /**
     * CategoryApiController constructor.
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function postCreate(Request $request)
    {
        dd($request->get());
        
    }
}
