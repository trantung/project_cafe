<?php

namespace APV\Base\Services;

// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use APV\User\Constants\UserDataConst;

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

    public function checkPermission($input)
    {
        if (!Auth::check()) {
            return false;
        }
        $user = Auth::user();
        //kiem tra quyen 
        if (!in_array($user->role_id, getRoleCreateNewUser())) {
            return false;
        }

        return true;
    }

    public function checkPermissionModule($moduleName, $methodName)
    {
        if (!Auth::check()) {
            return false;
        }
        $user = Auth::user();
        $permissions = listPermissionModules();
        if (!isset($permissions[$moduleName])) {
            return false;
        }
        if (!$permissions[$moduleName]) {
            return false;
        }
        if (!in_array($user->role_id, $permissions[$moduleName]['role_id'])) {
            return false;
        }
        if (!in_array($methodName, $permissions[$moduleName]['functions'])) {
            return false;
        }
        return $user;
    }
    public function checkPermissionUserShop($moduleName, $methodName, $input)
    {
        $user = $this->checkPermissionModule($moduleName, $methodName);
        if (!$user) {
            return false;
        }
        if ($user->role_id == UserDataConst::ADMIN) {
            return true;
        }
        //kiem tra user dang o shop nao
        //kiem tra input truyen vao xem co o shop day khong
        //
    }
}
