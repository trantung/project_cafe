<?php

namespace APV\User\Services;

use APV\User\Models\User;
use APV\User\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function createUser($input)
    {
        $userExist = $this->checkUserExist($input);
        if ($userExist) {
            return false;
        }
        $input['password'] = Hash::make($input['password']);
        $userId = User::create($input)->id;
        if (!$userId) {
            return false;
        }
        return $userId;
    }
    public function checkUserExist($input)
    {
        $data = User::where('username', $input['username'])->first();
        if ($data) {
            return true;
        }
        return false;
    }
    public function getListRole()
    {
        $data = Role::all();
        return $data->toArray();
    }
    public function postDeleteUser($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return false;
        }
        User::destroy($userId);
        return true;
    }
}
