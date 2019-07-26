<?php

namespace APV\Product\Services;

use APV\Category\Models\Category;
use APV\Product\Constants\ProductDataConst;
use APV\Product\Models\Product;
use APV\Base\Services\BaseService;
use APV\Product\Transformers\ProductTransformer;
use League\Fractal\Resource\Collection;
use Illuminate\Database\Eloquent\Collection as Collect;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductService
 * @package APV\Product\Services
 */

class ProductService extends BaseService
{
    /**
     * @var Category
     */
    protected $category;

    /**
     * @var ProductTransformer
     */
    protected $transformer;

    /**
     * ProductService constructor.
     * @param Product $model
     * @param ProductTransformer $transformer
     * @param Category $category
     */
    public function __construct(
        Product $model,
        ProductTransformer $transformer,
        Category $category
    ) {
        $this->transformer = $transformer;
        $this->category = $category;
        parent::__construct($model);
    }

    /**
     * Get new product list
     * @return Collection
     */
    public function getNewProductList()
    {
        $products = $this->model->active()
            ->showHomePage()
            ->orderBy('created_at', 'DESC')
            ->take(ProductDataConst::NEW_PRODUCT_QUANTITY)
            ->get();

        return $this->transformer->transformCollect($products);
    }

    /**
     * Get  product list group by root category
     * @return array
     */
    public function getProductListGroupByRootCategory()
    {
        /*
         * Get list root category with its all children category id
         */
        $allCategories = $this->category->get(['id', 'path'])->toArray();
        $rootCategories = $this->category->where('parent_id', 0)->pluck('name', 'id')->toArray();
        $rootCategoriesWithAllChildren = [];
        foreach ($rootCategories as $categoryId => $categoryName) {
            $categoryIds = [];
            foreach ($allCategories as $category) {
                if (explode('_',$category['path'])[0] == $categoryId) {
                    array_push($categoryIds, $category['id']);
                }
            }
            $rootCategoriesWithAllChildren[$categoryId] = (object) [
                'name' => $categoryName,
                'all_children' => $categoryIds,
            ];
        }

        /*
         * Group product by root category
         */
        $products = $this->model->active()->showHomePage()->get();
        $groupOutput = collect();
        foreach ($rootCategoriesWithAllChildren as $rootId => $children) {
            $productList = new Collect();
            foreach ($products as $product) {
                if (in_array($product->category_id, $children->all_children)) {
                    $productList->push($product);
                }
            }
            $groupOutput[$rootId] = (object) [
                'name' => $children->name,
                'products' => $productList->sortByDesc('created_at'),
            ];

        }

        /*
         * Transform result
         */
        $result = [];
        foreach ($groupOutput as $key => $group) {
            $products = $this->transformer
                ->transformCollect($group->products->chunk(ProductDataConst::MAX_QUANTITY_PRODUCT_CATEGORY)->get(0));
            array_push($result, [
                'category_id' => $key,
                'category_name' => $group->name,
                'productList' => $products,
            ]);
        }

        return $result;
    }

    /**
     * Get product detail
     * @param $productId
     * @return array|null
     */
    public function getProductDetail($productId)
    {
        $product = $this->model->find($productId);

        return $product ? $this->transformer->transformProductDetail($product) : null;
    }
    
    /**
     * Get  product list by search category root and text search
     * @param $keyword
     * @return array
     */
    public function searchProduct($keyword)
    {
        $data = $this->paginateCustom($keyword);
        return $this->convertData($data);
    }

    /**
     * Convert product list follow format default
     * @return array
     */
    public function convertData($data)
    {
        if (isset($data['data'])) {
            $result = [];
            foreach ($data['data'] as $key => $value) {
                $result['data'][$key]['id'] = $value['id'];
                $result['data'][$key]['name'] = $value['name'];
                $result['data'][$key]['main_img'] = $this->getMainImgProduct($value);
                $result['data'][$key]['price'] = $value['price'];
                $result['data'][$key]['status'] = $value['status'];
                $result['data'][$key]['created_at'] = $value['created_at'];
                $result['data'][$key]['updated_at'] = $value['updated_at'];
            }
        }
        
        $result['last_page'] = $data['last_page'];
        $result['first_page_url'] = $data['first_page_url'];
        $result['prev_page_url'] = $data['prev_page_url'];
        $result['next_page_url'] = $data['next_page_url'];
        $result['last_page_url'] = $data['last_page_url'];
        $result['current_page'] = $data['current_page'];
        $result['from'] = $data['from'];
        $result['per_page'] = $data['per_page'];
        $result['total'] = $data['total'];

        return $result;
    }

    /**
     * Get url main image of product
     * @return string
     */
    public function getMainImgProduct($data)
    {
        if (isset($data['images'])) {
            $images = $data['images'];
            $mainImage = $images->main;
            if (Storage::exists('/public/products/' . $mainImage)) {
                return url('storage/products/' . $mainImage);
            }
        }

        return null;
    }

    /**
     * Get  category relation by category_id and keyword
     * @param null $paramsArray
     * @return array
     */
    public function getListCategoryRelate($paramsArray)
    {
        $categoryIdArray = [];
        if (! isset($paramsArray['category_id'])
            || $paramsArray['category_id'] === 0) {
            return $this->category->pluck('id');
        }

        if ($paramsArray['category_id'] > 0) {
            $categories = $this->category->all();
            foreach ($categories as $category) {
                $path = $category->path;
                $array = explode('_', $path);
                if (in_array($paramsArray['category_id'], $array, true)) {
                    $categoryIdArray[] = $category->id;
                }
            }

            return $categoryIdArray;
        }

        return $categoryIdArray;
    }

    /**
     * Get query fulltext search of product
     * @return query
     */
    public function queryProductSearch($categoryIdArray, $paramsArray)
    {
        if (isset($paramsArray['keyword']) &&
            $paramsArray['keyword'] !== '') {
            return $this->model
                ->search($paramsArray['keyword'])
                ->whereIn('category_id', $categoryIdArray);
        }

        return $this->model->whereIn('category_id', $categoryIdArray);
    }

    /**
     * Get  product list by category and keyword search
     * @return array
     */
    public function getProductByCategories($paramsArray)
    {
        $data = [];
        $categoryIdArray = $this->getListCategoryRelate($paramsArray);
        $query = $this->queryProductSearch($categoryIdArray, $paramsArray);
        $productList = $query->paginate(ProductDataConst::PRODUCT_PER_PAGE)->toArray();
        $data['last_page'] = $productList['last_page'];
        $prevPageUrl = $nextPageUrl = '';
        $currentPage = $productList['current_page'];
        $categoryId = $paramsArray['category_id'] ?? '';
        $keyword = $paramsArray['keyword'] ?? '';
        $data['url_search_default'] = $productList['path'] . '?category_id=' .
            $categoryId . '&keyword=' . $keyword;
        if (isset($paramsArray['page']) &&
            $paramsArray['page'] > 1) {
            $prev = $paramsArray['page'] - 1;
            $prevPageUrl = $data['url_search_default'] . '&page=' . $prev;
        }

        if (! isset($paramsArray['page'])) {
            $nextPageUrl = $data['url_search_default'] . '&page=2';
        }

        if (isset($paramsArray['page']) &&
            $paramsArray['page'] < $data['last_page']) {
            $next = $paramsArray['page'] + 1;
            $nextPageUrl = $data['url_search_default'] . '&page=' . $next;
        }

        if ($data['last_page'] === 1) {
            $nextPageUrl = $prevPageUrl = '';
        }

        if (isset($paramsArray['page'])) {
            $currentPage = $paramsArray['page'];
        }
        
        $data['first_page_url'] = $data['url_search_default'] . '&page=1';
        $data['prev_page_url'] = $prevPageUrl;
        $data['next_page_url'] = $nextPageUrl;
        $data['last_page_url'] = $data['url_search_default'] . '&page=' . $data['last_page'];
        $data['current_page'] = $currentPage;
        $data['from'] = $productList['from'];
        $data['per_page'] = $productList['per_page'];
        $data['total'] = $productList['total'];
        $data['data'] = $productList['data'];

        return $data;
    }

    /**
     * Get  product list by category and keyword search, after paginate custom
     * @return array
     */
    public function paginateCustom($paramsArray)
    {
        $data = [];
        $data = $this->getProductByCategories($paramsArray);
        $categoryIdArray = $this->getListCategoryRelate($paramsArray);
        if (isset($paramsArray['page']) && $paramsArray['page'] > 1) {
            $offset = $paramsArray['page'] - 1;
            $query = $this->queryProductSearch($categoryIdArray, $paramsArray);
            $productList = $query->orderBy('created_at', 'desc')
                ->limit(ProductDataConst::PRODUCT_PER_PAGE)
                ->offset($offset * ProductDataConst::PRODUCT_PER_PAGE)
                ->get()
                ->toArray();
            $data = $this->getProductByCategories($paramsArray);
            unset($data['data']);
            $data['data'] = $productList;

            return $data;
        }

        return $data;
    }
}
