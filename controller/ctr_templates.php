<?php 
/*------------------------------ 
Templates generator by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/
include('system/php/php_config.php');
include('system/class/class_content.php');
$content = new Content();

$content->template(array(

	"BODY_CENTER" => @$BODY_CENTER,
	"MOD_KATEGORI" => @$MOD_KATEGORI,
	"MOD_MANUFAKTUR" => @$MOD_MANUFAKTUR,
	"MOD_SEARCH" => @$MOD_SEARCH,
	"MOD_LOGIN" => @$MOD_LOGIN,
	"MOD_BASKET" => @$MOD_BASKET,
	"MOD_USER" => @$MOD_USER,
	"MOD_PIC" => @$MOD_PIC,

),$TITLE_SITE,$_CONFIG['template_site']);