<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocmaiNotify extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'hocmai_notifies';

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
        'title', 'name', 'body', 'image_url', 'status', 'failure', 'success'
    ];
}
