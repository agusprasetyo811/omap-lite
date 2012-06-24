<?php $sess->sess_on();$sess_id = $sess->sess_get('sess_id');?>
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="?p=home" title="Halaman Utama" style="height:16px;line-height:16px;">Halaman Utama</a></li>
    <li class="topfirst"><a href="?p=produk" title="Produk" style="height:16px;line-height:16px;">Produk</a></li>
	<?php if(!isset($sess_id)){?>
    <li class="topmenu"><a href="?p=reg" title="Registrasi" style="height:16px;line-height:16px;">Registrasi</a></li>
    <?php }?>
    <li class="topmenu"><a href="?p=profile" title="Tentang Kami" style="height:16px;line-height:16px;"><span>Kontak Kami</span></a></li>
</ul>