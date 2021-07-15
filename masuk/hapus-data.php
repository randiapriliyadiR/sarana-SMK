<?php
$conn = mysqli_connect("localhost","root","","sarana");
date_default_timezone_set('Asia/Jakarta');
$id_barang=$_REQUEST['id_barang'];
$tgl_keluar =date("Y-m-d-H-i-s");
$data = mysqli_query($conn,"select * from barang");
while($d = mysqli_fetch_array($data)){
	$id_barang 		= $d['id_barang'];
	$nama_barang	= $d['nama_barang'];
	$jml_keluar		= $d['jumlah_barang'];
	$lokasi			= $d['lokasi'];
	$penerima		= $d['sumber_dana'];
}	

$query = "DELETE FROM barang WHERE id_barang=$id_barang"; 
mysqli_query($conn,$query);
mysqli_query($conn,"INSERT INTO barang_keluar(id_barang, nama_barang, tgl_keluar, jml_keluar, lokasi, penerima) 
										value ('$id_barang','$nama_barang','$tgl_keluar','$jml_keluar','$lokasi','$penerima')");
header("Location: data-barang.php"); 
?>