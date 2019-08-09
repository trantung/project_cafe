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
    // use FullTextSearchTrait;

    /**
     * @var string
     */
    protected $table = 'products';
    // protected $searchable = [
    //     'name'
    // ];
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'id', 'name', 'category_id', 'price_origin', 'price_pay',
        'code', 'barcode', 'print_view', 'description', 'weight_number', 'avatar', 'open_time', 'close_time', 'duration_time'
    ];
   
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
