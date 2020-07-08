<?php
namespace APV\Order\Models;

use Illuminate\Database\Eloquent\Model;
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
        //Thông tin cơ bản khách hàng
        'customer_id',
        'customer_name',
        'customer_phone',
        //mã đơn hàng sau khi đặt hàng xong
        'code',
        //Tổng tiền của tất cả sản phẩm có ở order trước khi giảm giá = base_price * quantity hoặc = total_product_price - total_topping_price
        'amount',
        //tổng tiền của tất cả sản phẩm bao gồm topping trước khi giảm giá:
        'total_product_price',
        //tổng tiền topping
        'total_topping_price',
        //tổng tiền đơn hàng sau khi giảm giá bao gồm cả voucher
        'amount_after_promotion',
        //Trạng thái đơn hàng:(dành cho nhân viên):0: hủy, 1: tạo mới do nhân viên, 2: xác nhận bếp, 3: thu ngân xác nhận, 4: xóa,
        //5: Khách hàng đặt, 6: Khách hàng đã hoàn thành(kết thúc đặt hàng), 7: Khách hàng hủy đơn
        'status',
        //comment cho 1 đơn hàng
        'comment',
        //dành cho nhân viên
        'created_by',
        'updated_by',
        'confirm_payment_by',
        'updated_order_by',
        'table_qr_code',
        'level_id',
        'table_id',
        //Thể loại đơn hàng: dành cho nhân viên: 1:tai shop, 2: take away, 3: ship,
        //dành cho khách hàng 4: khách hàng(customer) đặt qua app
        'order_type_id',
        //Dành cho ship(nếu liên kết với đơn vị ship)
        'ship_price',
        'ship_id',
        //Dành cho khách hàng:sử dụng sau này nếu có chia đơn hàng thành nhiều đơn khác nhau cho bạn bè. Hiện tại là null
        'order_use'
    ];

}
