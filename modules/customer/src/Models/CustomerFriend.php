<?php
namespace APV\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package APV\Customer\Models
 */
class CustomerFriend extends Model
{
    protected $table = 'customer_friends';
    protected $fillable = [
        'customer_id',
        'customer_phone',
        'friend_id',
        'friend_name',
        'friend_phone',
        'avatar'
    ];

}
