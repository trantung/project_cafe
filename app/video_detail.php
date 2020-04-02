<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video_detail extends Model
{
    protected $table = 'video_detail';
    protected $fillable =[
        'video_id',
        'data',
    ];
}
