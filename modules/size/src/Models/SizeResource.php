<?php
namespace APV\Size\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Size
 * @package APV\Size\Models
 */
class SizeResource extends Model
{

    /**
     * @var string
     */
    protected $table = 'size_product_material';

    /**
     * @var array
     */
    protected $fillable = [
        'size_product_id', 'product_id', 'size_id', 'material_id', 'quantity',
        'step_distance', 'mix', 'max', 'status'
    ];

}
