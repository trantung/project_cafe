<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiCourseUser extends Model
{
    protected $table = 'hocmai_course_user';
    protected $fillable = [
        'course_id', 'user_id', 'hocmai_user_id', 'active'
    ];
}
