<?php
namespace APV\Order\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package APV\Order\Models
 */
class OrderProduct extends Model
{
    // use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'order_product';

    /**
     * @var array
     */
    // protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //tao mới record trong bảng order_product
    //giá tiền trước khi giảm giá: order_product.product_price
    //giá tiền sau khi giảm giá:order_product.promotion_price,
    //tổng tiền sản phẩm chưa có topping sau khi giảm giá: order_product.price
    //tổng tiền bao sản phẩm bao gồm cả topping: order_product.total_price
    protected $fillable = [
        'product_code', 'product_id', 'status', 'order_id', 'size_id', 'quantity', 'price', 'total_price', 'promotion_price', 'customer_id', 'table_id', 'table_qr_code', 'level_id', 'ship_id', 'total_price_topping', 'product_price', 'order_product_comment'
    ];

}
