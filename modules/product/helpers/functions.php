<?php

	function getBarCodeProduct($productId = null)
	{
		$length = 16;
        $randstring = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
        if ($productId) {
        	$data = $productId . $randstring;
        	return $data;
        }
        return $randstring;
	}