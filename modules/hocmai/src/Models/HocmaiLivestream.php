<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocmaiLivestream extends Model
{
    use SoftDeletes;

    protected $table = 'hocmai_livestreams';
    protected $fillable = [
        'hocmai_livestream_id', 'name', 'school_block_id', 'url'
    ];
    protected $dates = ['deleted_at'];
}
