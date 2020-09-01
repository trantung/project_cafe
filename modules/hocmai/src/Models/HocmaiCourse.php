<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocmaiCourse extends Model
{
    use SoftDeletes;

    protected $table = 'hocmai_courses';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'hocmai_course_id', 'course_name'
    ];
}
