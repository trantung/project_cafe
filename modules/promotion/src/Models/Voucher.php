<?php
namespace APV\Promotion\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Promotion
 * @package APV\Promotion\Models
 */
class Voucher extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'vouchers';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //percent_promotion: % giảm giá
    //money_promotion: giá tiền giảm giá. Ví dụ: giảm giá 100k cho sản phẩm
    //start_time: thoi gian bat dau
    //end_time: thoi gian ket thuc khuyen mai
    protected $fillable = [
        'name', 'status', 'start_time', 'end_time', 'money_promotion', 'percent_promotion', 'code', 'quantity', 'description', 'avatar'
    ];
}
