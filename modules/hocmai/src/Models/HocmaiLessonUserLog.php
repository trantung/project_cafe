<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiLessonUserLog extends Model
{
    protected $table = 'hocmai_lesson_user_log';
    protected $fillable = [
        'course_id', 'lesson_id', 'user_id', 'hocmai_user_id', 'first_time', 'last_time'
    ];
}
