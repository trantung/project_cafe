<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Promotion
 * @package APV\Promotion\Models
 */
class HocmaiApp extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'hocmai_apps';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //app_os: Hệ điều hành của app. IOS = 1, ANDROID =2, Khác = 3
    protected $fillable = [
        'app_version', 'app_id', 'app_os'
    ];
}
