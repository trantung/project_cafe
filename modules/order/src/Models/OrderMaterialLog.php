<?php
namespace APV\Order\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Order
 * @package APV\Order\Models
 */
class OrderMaterialLog extends Model
{
    /**
     * @var string
     */
    protected $table = 'order_material_logs';

    /**
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'size_id', 'material_order_quantity', 'material_id', 'material_quantity'
    ];

}
