<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiUserApp extends Model
{
    /**
     * @var string
     */
    protected $table = 'hocmai_user_app';
    //hocmai_app_id: id cua hocmai_apps
    //hocmai_user_id: hocmai_user_id cua hocmai_users
    //user_id: id cua hocmai_users
    protected $fillable = [
        'hocmai_user_id', 'user_id', 'hocmai_app_id'
    ];
}
