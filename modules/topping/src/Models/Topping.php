<?php
namespace APV\Topping\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use APV\Product\Models\ProductTopping;
use APV\Topping\Models\ToppingCategory;
use APV\Product\Models\Product;

/**
 * Class Topping
 * @package APV\Topping\Models
 */
class Topping extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'toppings';

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
        'name',
        'price',
        'status',
    ];
    public function categories()
    {
        return $this->belongsToMany('APV\Category\Models\Category', 'topping_category');
    }

    public static function createToppingProduct($toppingId, $productId)
    {
        ProductTopping::create(['product_id' => $productId, 'topping_id' => $toppingId]);
    }

    public static function createToppingForOneCategory($toppingId, $categoryId)
    {
        if (!$categoryId) {
            return true;
        }
        ToppingCategory::create(['topping_id' => $toppingId, 'category_id' => $categoryId]);
        $list = Product::where('category_id', $categoryId)->get();
        foreach ($list as $key => $product) {
            self::createToppingProduct($toppingId, $product->id);
        }
    }

    public static function createToppingForListCategory($toppingId, $categories)
    {
        foreach ($categories as $key => $value) {
            self::createToppingForOneCategory($toppingId, $value);
        }
        return true;
    }

}
