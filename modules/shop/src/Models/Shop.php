<?php
namespace APV\Shop\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 * @package APV\Product\Models
 */
class Shop extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'shops';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'description', 'city', 'owner', 'address', 'lat', 'long', 'acive', 'require_customer_login', 'open_time', 'close_time'
    ];
}
