<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiLessonUser extends Model
{
    protected $table = 'hocmai_lesson_user';
    protected $fillable = [
        'course_id', 'user_id', 'lesson_id', 'hocmai_user_id', 'active'
    ];
}
