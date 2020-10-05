<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiNotifyDeviceError extends Model
{

    /**
     * @var string
     */
    protected $table = 'hocmai_notify_device_errors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notify_id', 'device_token'
    ];
}
