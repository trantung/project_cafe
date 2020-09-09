<?php
namespace APV\Hocmai\Models;

use Illuminate\Database\Eloquent\Model;

class HocmaiNotifyContext extends Model
{

    /**
     * @var string
     */
    protected $table = 'hocmai_notify_contexts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notify_id', 'context_id', 'action_type', 'detail', 'sound', 'ios_badge', 'expire'
    ];
}
