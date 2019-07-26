<?php

namespace APV\Admin\Models;

use APV\Admin\Models\Auth\OauthAccessToken;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

// use APV\User\Models\Auth\OauthAccessToken;
// use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// // use Laravel\Passport\HasApiTokens;
// use SMartins\PassportMultiauth\HasMultiAuthApiTokens;

/**
 * Class User
 * @package APV\User\Models
 */
class Admin extends Authenticatable
{
    use HasApiTokens;
    protected $table = 'users';
    // protected $dates = ['deleted_at'];
    protected $fillable = [
        'username',
        'password',
    ];
    protected $hidden = ['password', 'remember_token'];
    
}
