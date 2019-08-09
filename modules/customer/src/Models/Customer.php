<?php
namespace APV\Customer\Models;

use APV\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package APV\Customer\Models
 */
class Customer extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'customers';

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
        'phone',
        'username',
        'password',
    ];
    protected $hidden = ['password', 'remember_token'];
}
