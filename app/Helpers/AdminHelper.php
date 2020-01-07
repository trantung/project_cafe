<?php

use APV\Product\Models\Product;
use APV\Category\Models\Category;
use APV\Level\Models\Level;
use APV\User\Models\Role;
use APV\Category\Constants\CategoryDataConst;
use APV\Material\Models\MaterialType;
use APV\Material\Models\Material;
use APV\Size\Models\Size;
use APV\Topping\Models\Topping;
use APV\Order\Constants\OrderDataConst;

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
function getPathProduct($parId)
{
    $path = '';
    if ($parId == 0) {
        return $path;
    }
    $ProductParent = Product::find($parId);
    $pathParent =  $ProductParent->path;
    if ($pathParent == '') {
        $path = $parId;
        return $path;
    }
    $path = $pathParent.'_'.$parId;
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
// lấy name theo id va model
function getNameProductById($id){
    $data = Product::find($id);
    if($data){
        return $data->name;
    }
    return null;
}
function getNameSizeById($id){
    $data = Size::find($id);
    if($data){
        return $data->name;
    }
    return null;
}

// lấy list theo name
function getListProduct()
{
    return $data = Product::pluck('name', 'id')->toArray();
}
function getListSizeProduct()
{
    return $data = Size::pluck('name', 'id')->toArray();
}

//get value topping
function getValueTopping($toppingId, $field)
{
    $topping = Topping::find($toppingId);
    if ($topping) {
        return $topping->$field;
    }
    return null;
}
//get source Name product_topping
function getSourceProductTopping($source)
{
    if ($source == CATEGORY_TOPPING_SOURCE) {
        return 'Category';
    }
    if ($source == PRODUCT_TOPPING_SOURCE) {
        return 'Product';
    }
    
}

function getProductIsShip()
{
    $data = array(
        PRODUCT_IS_SHIP_INACTIVE =>'Inactive',
        PRODUCT_IS_SHIP_ACTIVE => 'Active',
    );
    return $data;
}

function getFieldNameMaterial($id, $field)
{
    $data = Material::find($id);
    return $data->$field;
}

function getListMaterail()
{
    $data = Material::pluck('name', 'id');
    return $data;
}

function getArrayStatus()
{
    return [1 => 'Active', 0 => 'Inactive'];
}
//table: size: kích cỡ bàn(lớn vừa nhỏ), type: thể loại bàn: Hình tròn, Hình vuông, Hình chữ nhật
function getSizeDefault()
{
    $data = array(
        TABLE_SIZE_S => 'S',
        TABLE_SIZE_M => 'M',
        TABLE_SIZE_L => 'L',
    );
    return $data;
}

function getTypeDefault()
{
    $data = array(
        TABLE_TYPE_CIRCLE => 'Hình tròn',
        TABLE_TYPE_SQUARE => 'Hình vuông',
        TABLE_TYPE_REC => 'Hình chữ nhật'
    );
    return $data;
}

function getNameSizeTable($tableSizeId)
{
    $data = getSizeDefault();
    return $data[$tableSizeId];
}

function getNameTypeTable($tableTypeId)
{
    $data = getTypeDefault();
    return $data[$tableTypeId];
}

function getNameStatusTable($status)
{
    $data = getArrayStatus();
    return $data[$status];
}
//order
function getStatusOrder()
{
    $data = array(
        OrderDataConst::ORDER_STATUS_CANCEL => 'Hủy đơn',
        OrderDataConst::ORDER_STATUS_CREATED => 'Tạo mới',
        OrderDataConst::ORDER_STATUS_CONFIRM_KITCHENT => 'Bếp confirm',
        OrderDataConst::ORDER_STATUS_CONFIRM_CASHIER => 'Thu ngân confirm',
        OrderDataConst::ORDER_STATUS_DELETE => 'Xóa đơn',
    );
    return $data;
}

function getNameStatusOrder($orderStatus)
{
    $data = getStatusOrder();
    return $data[$orderStatus];
}

function renderCodeOrder()
{
    $length = 16;
    $randstring = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    return $randstring;
}