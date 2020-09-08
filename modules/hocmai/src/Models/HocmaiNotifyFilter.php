<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiNotifyFilter extends Model
{

    /**
     * @var string
     */
    protected $table = 'hocmai_notify_filter';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notify_id', 'filter_id', 'type_id', 'operator_id', 'detail', 'app_id'
    ];
}
