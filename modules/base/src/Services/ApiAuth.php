<?php

namespace APV\Base\Services;

// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class ApiAuth
{
    public function attempt($input)
    {

        if (!isset($input['username']) || !isset($input['password'])) {
            return false;
        }
        if (!Auth::attempt(['username' => $input['username'], 'password' => $input['password']])) {
            return false;
        }
        $person = Auth::user();
        $data['token'] = $person->createToken(config('app.name'))->accessToken;
        $data['detail'] = $person;
        return $data;
    }

    public function logout() {

        if (Auth::check()) {
            $data = Auth::user();
            $data->oauthAccessTokens()->update([
                'revoked' => true,
            ]);
            return $data;
        }
        return false;
    }
}
