<?php

namespace APV\User\Models\Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OauthAccessToken
 * @package APV\User\Models\Auth
 */
class OauthAccessToken extends Model
{
    /**
     * @var string
     */
    protected $table = 'oauth_access_tokens';
}
