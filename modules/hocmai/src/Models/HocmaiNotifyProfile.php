<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiNotifyProfile extends Model
{

    /**
     * @var string
     */
    protected $table = 'hocmai_notify_profile';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notify_id', 'schedule_id', 'fire_base_notify_id', 'schedule_date', 'start_date', 'end_date', 'schedule_time'
    ];
}
