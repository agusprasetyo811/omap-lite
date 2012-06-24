<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class Validate {
	
	function email($email){
		return @eregi( "^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email );
	}
	
	function no($key){
		return @eregi( "^[0-9]+$", $key);
	}
	
	function hp($key){
		return @eregi( "^\+[0-9]{2}[0-9]{10,13}+$", $key);
	}
	
	function word($key){
		return @eregi( "^[0-9a-z]([-/]?[0-9a-z])+$", $key);
	}
	
	function no_comment($key){
		return @eregi( "^[A-Za-z0-9-\_\.\,\:\/\'\ ]+$", $key);
	}
	
	function no_quote($key){
		return @eregi( "^[A-Za-z0-9_\.\,\-\:\/\']+$", $key);
	}
	
	function userlog($key){
		return @eregi( "^[A-Za-z0-9]+$", $key);
	}
	
	function limit($key,$start_limit, $end_limit){
		return @eregi( "^.{".$start_limit.",".$end_limit."}$", $key);
	}
}