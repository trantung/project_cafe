<?php

namespace APV\Product\Transformers;

use APV\Product\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use League\Fractal\TransformerAbstract;

/**
 * Class ProductTransformer
 * @package APV\Product\Transformers
 */
class ProductTransformer extends TransformerAbstract
{
    /**
     * @param Product $model
     * @return array
     */
    public function transform(Product $model)
    {
        $imageUrl = Storage::exists('/public/products/' . $model->images->main) ?
            url('storage/products/' . $model->images->main) : null;

        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'main_img' => $imageUrl,
            'price' => $model->price,
            'status' => $model->status,
            'created_at' => Carbon::parse($model->created_at)->toDateTimeString(),
            'updated_at' => Carbon::parse($model->updated_at)->toDateTimeString(),
        ];
    }

    /**
     * Transform collection of categories
     * @param Collection $collect
     * @return \League\Fractal\Resource\Collection
     */
    public function transformCollect(Collection $collect)
    {
        $outputCollect = collect();
        foreach ($collect as $item) {
            $outputCollect->push($this->transform($item));
        }

        return $outputCollect;
    }

    /**
     * @param Product $model
     * @return array
     */
    public function transformProductDetail(Product $model)
    {
        $moreImage = $model->images->more_img;
        $productImages = [];
        foreach ($moreImage as $image) {
            if (Storage::exists('/public/products/' . $image)) {
                array_push($productImages, url('storage/products/' . $image));
            }
        }

        $productMoreDetail = [
            'short_description' => $model->short_description,
            'long_description' => $model->long_description,
            'product_image' => $productImages,
        ];

        return array_merge($this->transform($model), $productMoreDetail);
    }
}
