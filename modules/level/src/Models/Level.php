<?php
namespace APV\Level\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Level
 * @package APV\Level\Models
 */
class Level extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'levels';

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
        'shop_id',
        'name',
        'description',
        'active',
    ];

}
