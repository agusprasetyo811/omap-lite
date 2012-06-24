<?php 

$db->connect();
@$user = $_POST['user'];
@$pass = md5($_POST['pass']);

if(isset($_POST['submit'])){
	$q = $db->query("select user,pass from user where user = '$user'");
	$db->rows($q);
	@$userdb = $db->rows->user;
	@$passdb = $db->rows->pass;
	
	if(empty($user) || empty($pass)){
		echo "Field Kosong";
		link_to("?n=err_user");
	}elseif($user != $userdb){
		echo "Error User";
	}elseif($pass != $passdb){
		echo "Error Pass";
	}else{
		echo "Berhasil Masuk";
	}
}