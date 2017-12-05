<?php 
if (!function_exists('quickRandom')){
	function quickRandom($length){
   	$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  	 return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
	}
}
function SendMail($from, $to, $realname, $uniquename){
	$from = $from;
    $to = $to;
    $real_name = $realname;
    $unique_name = $uniquename;
    //
    $subject = 'Vous avez un nouveau fichier';
    $content= $from.' vous a envoyé via nos services.<br/>Lien de téléchargeemnt: http://www.nontransfer.fr/'. $unique_name.'/'.$real_name;
    if (mail($to ,$from ,$subject, $content)) {
        echo 'bravo le mail est envoyé';    
            }else{
                echo "t'es dans la mouise";
    }
}