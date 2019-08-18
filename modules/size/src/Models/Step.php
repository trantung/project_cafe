<?php
namespace APV\Size\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Size
 * @package APV\Size\Models
 */
class Step extends Model
{

    /**
     * @var string
     */
    protected $table = 'steps';
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'product_id', 'size_id', 'material_id', 'quantity', 'status'
    ];

}
