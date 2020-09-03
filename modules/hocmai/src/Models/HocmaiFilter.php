<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Promotion
 * @package APV\Promotion\Models
 */
class HocmaiFilter extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'hocmai_filters';

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
        'name', 'des'
    ];
}
