<?php
namespace APV\Topping\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Topping
 * @package APV\Topping\Models
 */
class ToppingCategory extends Model
{

    protected $table = 'topping_category';
    protected $fillable = [
        'id',
        'category_id',
        'topping_id',
        'status'
    ];

}
