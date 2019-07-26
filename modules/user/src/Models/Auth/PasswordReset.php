<?php

namespace APV\User\Models\Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordReset
 * @package APV\User\Models\Auth
 */
class PasswordReset extends Model
{
    /**
     * @var string
     */
    protected $table = 'password_resets';

    /**
     * @var array
     */
    protected $fillable = ['email', 'token'];
}
