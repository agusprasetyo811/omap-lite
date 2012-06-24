<div id="sidebar">
<?php
$sess->sess_on();
$sess_user = $sess->sess_get('sess_user');
?>
<?php if (isset($sess_user)) { ?>
	<div align="center" style="padding: 5px;">
		Selamat datang
		<?=$sess_user?>
		<hr />
		<form method="post">
			<input class="button" type="submit" name="logout" value="Ingin Keluar" />
		</form>
		<?php include('php/logout_progress.php');?>
	</div>
<?php } else {
	include('php/login_progress.php');?>
	<form method="post" action="">
		<table align="center" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<div id="sidebar-judul">Login Area</div>
					<?php include('php/notif.php');?><hr />
				</td>
			</tr>
			<tr>
				<td>
					<input 	class="field-login" 
						   	size="16" 
						   	type="text" 
						   	name="user"
						   	onblur="if (this.value=='') {this.value='username'}"
							onfocus="if(this.value=='username'){this.value=''}"
							value="username" />
				</td>
			</tr>
			<tr>
				<td>
					<input 	class="field-login" 
							size="16" 
							type="password" 
							name="pass"
							onblur="if(this.value==''){this.value='password'}"
							onfocus="if(this.value=='password'){this.value=''}"
							value="password" />
				</td>
			</tr>
			<tr>
				<td align="right">
					<input 	class="button" 
							type="submit" 
							name="login"
							value="Login" />
				</td>
			</tr>
			<tr>
				<td align="center">
					<hr /><a href="?p=reg">Daftar disini</a></td>
			</tr>
		</table>
	</form>
	<br />
	<?php } ?>
</div>
