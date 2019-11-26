<?php

use APV\Category\Models\Category;
use APV\Category\Constants\CategoryDataConst;

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

function getListCategory()
{
    $data = Category::pluck('name', 'id')->toArray();
    $data = [0 => 'category chính' ] + $data;
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