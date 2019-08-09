<?php

namespace APV\Material\Transformers;

use APV\Material\Models\Material;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use League\Fractal\TransformerAbstract;

/**
 * Class MaterialTransformer
 * @package APV\Material\Transformers
 */
class MaterialTransformer extends TransformerAbstract
{
    /**
     * @param Material $model
     * @return array
     */
    public function transform(Material $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
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
}
