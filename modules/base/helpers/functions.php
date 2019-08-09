<?php
use APV\User\Constants\UserDataConst;
function getRoleCreateNewUser()
{
    return [UserDataConst::ADMIN];
}
function listPermissionModules()
{
    $array = [
        'category' => [
            'role_id' => [UserDataConst::ADMIN, UserDataConst::SHOP_MANAGER],
            'functions' => ['postEdit', 'postDelete', 'postCreate'],
        ],
        'user' => [
            'role_id' => [UserDataConst::ADMIN, UserDataConst::SHOP_MANAGER],
            'functions' => ['postEdit', 'postDelete', 'postCreate'],
        ],
        'shop' => [
            'role_id' => [UserDataConst::ADMIN],
            'functions' => ['postEdit', 'postDelete', 'postCreate'],
        ],
        'level' => [
            'role_id' => [UserDataConst::ADMIN, UserDataConst::SHOP_MANAGER],
            'functions' => ['postEdit', 'postDelete', 'postCreate'],
        ],
        'table' => [
            'role_id' => [UserDataConst::ADMIN, UserDataConst::SHOP_MANAGER],
            'functions' => ['postEdit', 'postDelete', 'postCreate'],
        ],
        'topping' => [
            'role_id' => [UserDataConst::ADMIN, UserDataConst::SHOP_MANAGER],
            'functions' => ['postEdit', 'postDelete', 'postCreate'],
        ],
        'product' => [
            'role_id' => [UserDataConst::ADMIN, UserDataConst::SHOP_MANAGER],
            'functions' => ['postEdit', 'postDelete', 'postCreate', 'postCreateProductTopping'],
        ],
        'size' => [
            'role_id' => [UserDataConst::ADMIN, UserDataConst::SHOP_MANAGER],
            'functions' => ['postEdit', 'postDelete', 'postCreate', 'getListSizeProduct', 'postCreateSizeProduct', 'getDetailSizeProduct', 'postEditSizeProduct', 'postDeleteSizeProduct'],
        ],
        
        
        
    ];
    return $array;
}