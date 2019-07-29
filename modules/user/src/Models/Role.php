<?php
namespace APV\User\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 * @package APV\Product\Models
 */
class Role extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    // protected $searchable = [
    //     'name'
    // ];

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
        'name',
        'description',
    ];
}
