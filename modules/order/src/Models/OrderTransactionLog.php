<?php
namespace APV\Order\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Order
 * @package APV\Order\Models
 */
class OrderTransactionLog extends Model
{
    /**
     * @var string
     */
    protected $table = 'order_transaction_logs';

    /**
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'total_before', 'total_after', 'user_id'
    ];

}
