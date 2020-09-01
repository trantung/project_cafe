<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiUserLoginLog extends Model
{
    protected $table = 'hocmai_user_login_logs';
    //login: Thơi gian login
    //hocmai_user_id: hocmai_user_id cua hocmai_users
    //user_id: id cua hocmai_users
    protected $fillable = [
        'hocmai_user_id', 'user_id', 'login'
    ];
}
