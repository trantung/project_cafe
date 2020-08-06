<?php
namespace APV\Customer\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * @package APV\Customer\Models
 */
class CustomerToken extends Model
{
    protected $table = 'customer_tokens';
    protected $fillable = [
        'customer_id', 'customer_token', 'customer_phone', 'expired'
    ];

}
