<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiAppVersion extends Model
{
    /**
     * @var string
     */
    protected $table = 'hocmai_app_versions';
    //hocmai_app_id: id cua hocmai_apps
    //hocmai_user_id: hocmai_user_id cua hocmai_users
    //user_id: id cua hocmai_users
    protected $fillable = [
        'app_id', 'version', 'app_version'
    ];
}
