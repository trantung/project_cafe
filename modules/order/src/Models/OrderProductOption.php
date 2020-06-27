<?php
namespace APV\Order\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package APV\Order\Models
 */
class OrderProductOption extends Model
{
    /**
     * @var string
     */
    protected $table = 'order_product_option';
    /**
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'order_id', 'option_id', 'order_product_id'
    ];

}
