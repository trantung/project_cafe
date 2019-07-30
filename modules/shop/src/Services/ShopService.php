<?php

namespace APV\Shop\Services;

use APV\Shop\Models\Shop;

class ShopService
{
    public function postCreate($input)
    {
    	$shopId = Shop::create($input)->id;
    	if (!$shopId) {
    		return false;
    	}
    	return $shopId;
    }

    public function postEdit($shopId, $input)
    {
    	$shop = Shop::find($shopId);
    	if (!$shop) {
    		return false;
    	}
    	$shop->update($input);
    	return true;
    }

    public function postDelete($shopId)
    {
    	$shop = Shop::find($shopId);
    	if (!$shop) {
    		return false;
    	}
    	Shop::destroy($shopId);
    	return true;
    }

    public function getList()
    {
    	$list = Shop::all();
    	return $list->toArray();
    }
}
