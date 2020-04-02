<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schoolSubjects extends Model
{
    protected $table = 'schoolSubjects';
    protected $fillable =[
        'name',
        'desc',
        'class_id',
        'teacher_id',
    ];
}
