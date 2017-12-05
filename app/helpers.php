<?php 
if (!function_exists('quickRandom')){
	function quickRandom($length){
   	$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  	 return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
	}
}