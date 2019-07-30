<?php

namespace APV\User\Services;

use APV\User\Models\User;
use APV\User\Models\Role;
use APV\User\Models\UserShop;
use APV\Shop\Models\Shop;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function createUser($input)
    {
        $userExist = $this->checkUserExist($input);
        if ($userExist) {
            return false;
        }
        $shopExist = $this->checkShopExist($input['shop_id']);
        if (!$shopExist) {
            return false;
        }
        $input['password'] = Hash::make($input['password']);
        $userId = User::create($input)->id;
        UserShop::create(['user_id' => $userId, 'shop_id' => $input['shop_id']]);
        if (!$userId) {
            return false;
        }
        return $userId;
    }

    public function checkShopExist($shopId)
    {
        $shop = Shop::find($shopId);
        if (!$shop) {
            return false;
        }
        return $shop;
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
        UserShop::where('user_id', $userId)->delete();
        User::destroy($userId);
        return true;
    }
}
