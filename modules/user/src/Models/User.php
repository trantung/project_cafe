<?php

namespace APV\User\Models;

use APV\User\Models\Auth\OauthAccessToken;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
/**
 * Class User
 * @package APV\User\Models
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use SoftDeletes;
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array
     */
    // protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'username',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
