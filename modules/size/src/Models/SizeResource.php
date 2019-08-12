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
