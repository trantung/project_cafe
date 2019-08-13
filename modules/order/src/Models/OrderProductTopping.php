<?php
namespace APV\Order\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package APV\Order\Models
 */
class OrderProductTopping extends Model
{

    /**
     * @var string
     */
    protected $table = 'order_product_topping';
    /**
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'order_id', 'topping_id', 'topping_price', 'order_product_id'
    ];

}
