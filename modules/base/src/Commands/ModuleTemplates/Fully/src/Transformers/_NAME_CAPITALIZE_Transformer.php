<?php

namespace APV\_NAME_CAPITALIZE_\Transformers;

use APV\_NAME_CAPITALIZE_\Models\_NAME_CAPITALIZE_;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

/**
 * Class _NAME_CAPITALIZE_Transformer
 * @package APV\_NAME_CAPITALIZE_\Transformers
 */
class _NAME_CAPITALIZE_Transformer extends TransformerAbstract
{
    /**
     * @param _NAME_CAPITALIZE_ $model
     * @return array
     */
    public function transform(_NAME_CAPITALIZE_ $model)
    {
        return [
            'id' => (int) $model->id,
            //
            'created_at' => Carbon::parse($model->created_at)->toDateTimeString(),
            'updated_at' => Carbon::parse($model->updated_at)->toDateTimeString(),
        ];
    }
}
