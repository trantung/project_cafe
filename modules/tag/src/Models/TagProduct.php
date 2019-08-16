<?php
namespace APV\Tag\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Tag
 * @package APV\Tag\Models
 */
class TagProduct extends Model
{
    /**
     * @var string
     */
    protected $table = 'tag_product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_id', 'product_id'
    ];

}
