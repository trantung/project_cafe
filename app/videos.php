<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    protected $table = 'videos';
    protected $fillable =[
        'name',
        'desc',
        'class_id',
        'type',
        'image_small',
        'image_big',
        'url',
        'comment',
        'DateCreated',
        'DisplayDate',
        'user_id',
        'shoolblock_id',
        'schoolSubject_id',
        'teacher_id',
    ];
}
