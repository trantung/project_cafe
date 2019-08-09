<?php
namespace APV\Size\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Size
 * @package APV\Size\Models
 */
class SizeResource extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'size_product_material';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'size_product_id', 'product_id', 'size_id', 'material_id', 'quantity'
    ];

}
