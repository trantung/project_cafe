<?php
namespace APV\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Product
 * @package APV\Product\Models
 */
class CommonImage extends Model
{
    protected $table = 'common_images';
    protected $fillable = ['id', 'image_url', 'model_id', 'model_name', 'active', 'weight_number'];

}
