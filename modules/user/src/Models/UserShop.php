<?php
namespace APV\User\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 * @package APV\Product\Models
 */
class UserShop extends Model
{
    protected $table = 'user_shops';
    
    protected $fillable = [
        'user_id',
        'shop_id',
    ];
}
