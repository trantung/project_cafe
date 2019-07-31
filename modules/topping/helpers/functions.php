<?php
	
	function getCategoriesByString($string)
	{
		$data = explode(',', $string);
		return $data;
	}