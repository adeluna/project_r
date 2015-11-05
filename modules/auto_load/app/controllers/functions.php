<?php

function rand_text($len){
	$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$cadena = "";
	for($i=0;$i<$len;$i++){
		$cadena .= substr($caracteres,rand(0,strlen($caracteres)),1);
	}
	return $cadena;
}

function is_used($val1,$val2,$res){
	if($val1 == $val2){
		return $res;
	}else{
		return '';
	}
}

function check_email($email){
	if(filter_var($email,FILTER_VALIDATE_EMAIL) && filter_var($email,FILTER_SANITIZE_EMAIL)){
		return true;
	}else{
		return false;
	}
}



?>