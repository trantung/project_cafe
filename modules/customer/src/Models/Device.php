<?php
namespace APV\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package APV\Customer\Models
 */
class Device extends Model
{
    use SoftDeletes;
    protected $table = 'devices';
    protected $fillable = [
        'customer_id', 'device_id', 'device_token', 'device_name'
    ];

}
