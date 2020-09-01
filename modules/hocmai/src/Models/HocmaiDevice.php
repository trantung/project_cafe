<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiDevice extends Model
{
    protected $table = 'hocmai_devices';
    protected $fillable = [
        'device_token'
    ];
}
