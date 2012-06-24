<?php 
@$n = $_GET['n'];
switch($n){
	case'err_null':
		echo("<div align='center' id='box-e'>Field Kosong</div>");
		break;
	case'err_user':
		echo("<div align='center' id='box-e'>User Salah</div>");
		break;
	case'err_pass':
		echo("<div align='center' id='box-e'>Pass Salah</div>");
		break;
	case'logout':
		echo("<div align='center' id='box-s'>Anda Telah Logout</div>");
		break;
}