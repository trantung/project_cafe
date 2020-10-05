<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiNotifyDevice extends Model
{

    /**
     * @var string
     */
    protected $table = 'hocmai_notify_devices';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notify_id', 'device_token', 'status'
    ];
}
