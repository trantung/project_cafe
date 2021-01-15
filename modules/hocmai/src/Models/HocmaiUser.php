<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocmaiUser extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'hocmai_users';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //register_time:Ngày tháng năm đăng ký tài khoản của người dùng
    //number_open_app: Mobile: Số lần mở ứng dụng
    //last_session: Lần cuối user tương tác với hệ thống(logout hoặc login)
    protected $fillable = [
        'city_id', 'district_id', 'first_login', 'last_login', 'phone', 'hocmai_user_id', 'number_open_app',
        'class_id', 'birthday', 'register_time', 'total_course', 'last_session', 'username', 'name', 'device_token'
    ];
}
