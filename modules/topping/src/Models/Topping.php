<?php
namespace APV\Topping\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Topping
 * @package APV\Topping\Models
 */
class Topping extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'toppings';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'price',
        'status',
    ];
    public function categories()
    {
        return $this->belongsToMany('APV\Category\Models\Category', 'topping_category');
    }
}
