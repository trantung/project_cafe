<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiDeviceUser extends Model
{
    protected $table = 'hocmai_device_user';
    protected $fillable = [
        'hocmai_device_id', 'user_id'
    ];
}
