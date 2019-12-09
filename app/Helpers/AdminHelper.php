<?php

use App\Product;
use APV\Category\Models\Category;
use APV\Level\Models\Level;
use APV\User\Models\Role;
use APV\Category\Constants\CategoryDataConst;
use APV\Material\Models\MaterialType;
use APV\Material\Models\Material;

function getNameOfCategoryParent($category)
{
    if (!isset($category)) {
            return null;
    }
    if ($category->parent_id == CategoryDataConst::CATEGORY_ROOT) {
        $name = $category->name;
        return $name;
    }
    $categoryPath = $category->path;
    $explodePath = explode('_', $categoryPath);
    $name = '';
    foreach ($explodePath as $key => $value) {
        if (count($explodePath) - 1 > $key) {
            $name .= Category::find($value)->name . '-->';
        } else {
            $name .= Category::find($value)->name;
        }
    }
    $result = ['path' => $categoryPath, 'name' => $name];
    return $name;
}

function getListCategory($default = null)
{
    $data = Category::pluck('name', 'id')->toArray();
    if ($default) {
        return $data;
    } else {
        $data = [0 => 'category chính' ] + $data;       
    }
    return $data;
}

function getPathCategory($parentId)
{
    $path = '';
    if ($parentId == 0) {
        return $path;
    }
    $categoryParent = Category::find($parentId);
    $pathParent =  $categoryParent->path;
    if ($pathParent == '') {
        $path = $parentId;
        return $path;
    }
    $path = $pathParent.'_'.$parentId;
    return $path;
}
function getPathProduct($parentId)
{
    $path = '';
    if ($parentId == 0) {
        return $path;
    }
    $ProductParent = Product::find($parentId);
    $pathParent =  $ProductParent->path;
    if ($pathParent == '') {
        $path = $parentId;
        return $path;
    }
    $path = $pathParent.'_'.$parentId;
    return $path;
}
function getNameLevelByTable($id)
{
    $level = Level::find($id);
    if ($level) {
        return $level->name;
    }
    return null;
}

function getListLevel()
{
    return Level::pluck('name', 'id')->toArray();
}

function getListRole()
{
    return Role::pluck('name', 'id')->toArray();
}
function getRoleNameById($id)
{
    $role = Role::find($id);
    if ($role) {
        return $role->name;
    }
    return null;
}

function getMaterialTypeName($id)
{
    $materialType = MaterialType::find($id);
    if ($materialType) {
        return $materialType->name;
    }
    return null;
}

function getListMaterialType()
{
    return $data = MaterialType::pluck('name', 'id')->toArray();
}