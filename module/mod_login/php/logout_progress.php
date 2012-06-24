<?php 
if(isset($_POST['logout'])){
	$sess->sess_kill();
	$link->to('?n=logout');
}