<?php

namespace APV\User\Services;

use APV\User\Models\User;
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
}
