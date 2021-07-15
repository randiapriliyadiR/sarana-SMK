<?php
$data1 = array ();
$conn = mysqli_connect("localhost","root","","sarana");
$data = mysqli_query($conn,"select * from user");
while($d = mysqli_fetch_array($data)){
$data1[] = $d;
}
$contuser = count ($data1);
$user = "".$contuser;
?>	
	
	<a href="" class="btn-box big span4">
	<i class="icon-user"></i><b><?php echo $user?></b>
	<p class="text-muted">Total Users</p></a>
	
<?php
$data4 = array ();
$data = mysqli_query($conn,"select * from pinjam_barang");
while($pinjam = mysqli_fetch_array($data)){
$data4[] = $pinjam;
}
$contpinjam = count ($data4);
$pinjam = "".$contpinjam;
?>	
	<div class="span2">
	<a href="" class="btn-box big span4">
	<i class="icon-briefcase"></i><b><?php echo $pinjam?></b>
	<p class="text-muted">Barang Pinjam</p></a>
	</div>

<?php
$data2 = array ();
$data = mysqli_query($conn,"select * from barang_masuk");
while($masuk = mysqli_fetch_array($data)){
$data2[] = $masuk;
}
$contmasuk = count ($data2);
$masuk = "".$contmasuk;
?>
	<div class="span4">
	<a href="" class="btn-box small span4">
	<i class="icon-exchange"></i><b><?php echo $masuk?></b>
	<p class="text-muted">Barang Masuk</p></a>
	</div>
	
<?php
$data3 = array ();
$data = mysqli_query($conn,"select * from barang_keluar");
while($keluar = mysqli_fetch_array($data)){
$data3[] = $keluar;
}
$contkeluar = count ($data3);
$keluar = "".$contkeluar;
?>
	<div class="span2">
	<a href="" class="btn-box small span4">
	<i class="icon-exchange"></i><b><?php echo $keluar?></b>
	<p class="text-muted">Barang Keluar</p></a>
	</div>