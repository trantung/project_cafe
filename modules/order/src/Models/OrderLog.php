<?php
namespace APV\Order\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Order
 * @package APV\Order\Models
 */
class OrderLog extends Model
{
    /**
     * @var string
     */
    protected $table = 'order_logs';

    /**
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_new_id', 'order_new_created_by', 'order_old_id', 'order_old_data', 'order_old_created_by'
    ];
    protected $casts = [
        'order_old_data' => 'array',
    ];
}
