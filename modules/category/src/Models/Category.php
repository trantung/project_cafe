<?php
namespace APV\Category\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package APV\Category\Models
 */
class Category extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'categories';

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
        'id',
        'parent_id',
        'path',
        'name',
        'active',
        'image',
        'description',
        'created_admin_id',
        'updated_admin_id',
    ];

    /**
     * Get parentCategory
     * @return BelongsTo
     */
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get childrenCategories
     * @return HasMany
     */
    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * Get products in category
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

}
