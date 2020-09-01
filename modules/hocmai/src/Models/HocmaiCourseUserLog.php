<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiCourseUserLog extends Model
{
    protected $table = 'hocmai_course_user_log';
    protected $fillable = [
        'course_id', 'user_id', 'hocmai_user_id', 'first_time', 'last_time'
    ];
}
