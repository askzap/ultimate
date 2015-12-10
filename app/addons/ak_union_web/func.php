<?php

use Tygh\Registry;




///////////////////
////// HOOKS //////
///////////////////

function fn_ak_union_web_get_companies($params, &$fields, $sortings, $condition, $join, $auth, $lang_code, $group) 
{
	$fields[] = '?:companies.market_code';
}