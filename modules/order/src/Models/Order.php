<?php
namespace APV\Order\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package APV\Order\Models
 */
class Order extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'orders';

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
        'code', 'amount', 'status', 'customer_id', 'comment',
        'created_by', 'updated_by','order_type_id', 'ship_price', 'ship_id', 'total_product_price', 'total_topping_price', 'table_qr_code', 'level_id', 'table_id', 'amount_after_promotion',
        'customer_name', 'customer_phone', 'confirm_payment_by', 'updated_order_by', 'order_use'
    ];

}
