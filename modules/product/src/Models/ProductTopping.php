<?php
namespace APV\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Product
 * @package APV\Product\Models
 */
class ProductTopping extends Model
{

    protected $table = 'product_topping';
    protected $fillable = [
        'id',
        'product_id',
        'topping_id',
        'status'
    ];

}
