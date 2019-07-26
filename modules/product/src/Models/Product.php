<?php
namespace APV\Product\Models;

use APV\Category\Models\Category;
use APV\Product\Constants\ProductDataConst;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use APV\Base\Traits\FullTextSearchTrait;

/**
 * Class Product
 * @package APV\Product\Models
 */
class Product extends Model
{
    use SoftDeletes;
    use FullTextSearchTrait;

    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $searchable = [
        'name'
    ];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $casts = [
        'images' => 'object',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'images',
        'price',
        'show_home_page',
        'status',
        'short_description',
        'long_description',
        'created_admin_id',
        'updated_admin_id',
    ];

    /**
     * Get active product
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', ProductDataConst::PRODUCT_STATUS['ACTIVE']);
    }

    /**
     * Get can be shown on home page product
     * @param $query
     * @return mixed
     */
    public function scopeShowHomePage($query)
    {
        return $query->where('show_home_page', ProductDataConst::PRODUCT_SHOW_HOME_PAGE['SHOW']);
    }

    /**
     * Get category of product
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
