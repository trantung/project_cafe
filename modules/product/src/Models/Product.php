<?php

namespace APV\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "duration_time",
        "close_time",
        "open_time",
        "status",
        "avatar",
        "weight_number",
        "description",
        "print_view",
        "barcode",
        "code",
        "price_pay",
        "price_origin",
        "name",
        "category_id",
        'images',
        "created_at",
        "updated_at",
        "deleted_at",
        'is_ship',
        'short_desc',
        'using_at'
    ];
    protected $dates = ['deleted_at'];

    public function parentProduct()
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }
    
}