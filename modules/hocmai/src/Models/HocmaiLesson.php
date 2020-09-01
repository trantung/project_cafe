<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocmaiLesson extends Model
{
    use SoftDeletes;

    protected $table = 'hocmai_lessons';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'course_id', 'lesson_name', 'hocmai_lesson_id'
    ];
}
