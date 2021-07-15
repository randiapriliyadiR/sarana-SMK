<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
			<li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Beranda</a></li>
<?php
session_start();
if(isset($_SESSION['ADMIN'])) { ?>
	 <li><a href="data-user.php"><i class="menu-icon icon-inbox"></i>Data User </a></li>
	 <li><a href="data-barang.php"><i class="menu-icon icon-tasks"></i>Data Barang </a></li>
	 <li><a href="data-pinjam.php"><i class="menu-icon icon-tasks"></i>Entri Peminjaman Barang </a></li>
	 <li><a href="laporan.php"><i class="menu-icon icon-paste"></i>Rekap Laporan </a></li>
	 <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Keluar </a></li>
<?php
}else if(isset($_SESSION['MANAJEMEN'])) {?>
<li><a href="data-pinjam.php"><i class="menu-icon icon-tasks"></i>Entri Peminjaman Barang </a></li>
<li><a href="data-barang.php"><i class="menu-icon icon-tasks"></i>Data Barang </a></li>
<li><a href="logout.php"><i class="menu-icon icon-signout"></i>Keluar </a></li>
<?php
}else if(isset($_SESSION['PEMINJAM'])) {?>
<li><a href="data-pinjam.php"><i class="menu-icon icon-tasks"></i>Entri Peminjaman Barang </a></li>
<li><a href="logout.php"><i class="menu-icon icon-signout"></i>Keluar </a></li>
<?php
}else {?>
<li><a href="logout.php"><i class="menu-icon icon-signout"></i>Keluar </a></li>	
<?php
}
?>
		</ul>
	</div>
</div>

 