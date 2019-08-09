<?php
namespace APV\Order\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Order
 * @package APV\Order\Models
 */
class OrderBill extends Model
{

    /**
     * @var string
     */
    protected $table = 'order_bill_tmps';

    /**
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'order_id'
    ];

}
