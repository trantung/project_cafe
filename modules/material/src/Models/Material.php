<?php
namespace APV\Material\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Material
 * @package APV\Material\Models
 */
class Material extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'materials';

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
        'name', 'parent_id', 'material_type_id', 'active', 'quantity'
    ];

}
