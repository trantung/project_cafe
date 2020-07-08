<?php
namespace APV\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package APV\Customer\Models
 */
class CustomerAddress extends Model
{
    use SoftDeletes;

    protected $table = 'customer_address';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'location_lat',
        'location_long',
        'address',
        'favorite',
        'voucher_code',
        'customer_id',
        'order_id',
        'customer_friend_id',
        'using_at',
        'customer_option_chosse_id',
    ];

}
