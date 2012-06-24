<?php 
$db->connect();
@$user = $_POST['user'];
@$pass = md5($_POST['pass']);

if(isset($_POST['login'])){
	$q = $db->query('select a.*, b.* from user a, konsumen b where a.id_user = b.id_user and a.user = "'.$user.'" and a.user_type="konsumen"');
	$db->rows($q);
	@$id = $db->rows->id_user;
	@$userdb = $db->rows->user;
	@$passdb = $db->rows->pass;
	@$id_konsumen_db = $db->rows->id_konsumen;
	
	if(empty($user) || empty($pass)){
		$link->to('?n=err_null');
	}elseif($user != $userdb){
		$link->to('?n=err_user');
	}elseif($pass != $passdb){
		$link->to('?n=err_pass');
	}else{
		$sess->sess_set('sess_id',$id);
		$sess->sess_set('sess_id_konsumen',$id_konsumen_db);
		$sess->sess_set('sess_user',$user);
		/*
		$q = $db->query("select * from pemesanan order by id_pesan desc");
		while($db->rows($q)){
			$id_pesan = $db->rows->id_pesan;
			// Res Num
			$res_sum = mysql_query("select * from pemesanan_produk where id_pesan = '$id_pesan'");
			$num = mysql_num_rows($res_sum);
			$rows = mysql_fetch_array($res_num);
			
			// Melakukan Delete Jika Pemesanan Produk & Pengiriman & Pembayaran NULL 
			if ($res_sum == 0) {
				echo $rows[id_pesan] . "<br>";
				$db->query("delete from pemesanan where id_pesan = '$id'");
			}
		}
		*/
		// Insert data Pemesanan
		$db->query("insert into pemesanan(id_konsumen,tanggal_pesan) values ('$id_konsumen_db',NOW())");
		$q = $db->query("select * from pemesanan where id_konsumen = '$id_konsumen_db' order by id_pesan desc");
		$db->rows($q);
		// Set Id Pesan
		$id_pesan = $db->rows->id_pesan;
		// Include data Id Pesan to Session
		$sess->sess_set('sess_id_pesan',$id_pesan);
		$sess->sess_set('sess_id_konsumen', $id_konsumen_db);
		$link->location("index.php");
	}
}
