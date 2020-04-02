<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schoolbock extends Model
{
    protected $table = 'schoolbocks';
    protected $fillable = [
        'name',
        'desc',
        'class_id',
    ];

}
