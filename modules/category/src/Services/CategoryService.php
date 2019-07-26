<?php
namespace APV\Category\Services;

use APV\Category\Models\Category;
use APV\Base\Services\BaseService;
use APV\Category\Transformers\CategoryTransformer;
use League\Fractal\Resource\Collection;

/**
 * Class CategoryService
 * @package APV\Category\Services
 */
class CategoryService extends BaseService
{
    /**
     * @var CategoryTransformer
     */
    protected $transformer;

    /**
     * CategoryService constructor.
     * @param Category $model
     * @param CategoryTransformer $transformer
     */
    public function __construct(Category $model, CategoryTransformer $transformer)
    {
        $this->transformer = $transformer;
        parent::__construct($model);
    }

    /**
     * Get root category list
     * @return Collection
     */
    public function getRootCategoryList()
    {
        $categories = $this->model->where('parent_id', 0)->get();

        return $this->transformer->transformCollect($categories);
    }
}
