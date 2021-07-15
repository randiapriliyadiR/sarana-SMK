<?php
$conn = mysqli_connect("localhost","root","","sarana");
$result = mysqli_query($conn, "SELECT * FROM barang where id_barang");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
	$id_barang		= $_POST['id_barang'];
	$nama_barang	= $_POST['nama_barang'];
	$spesifikasi	= $_POST['spesifikasi'];
	$lokasi			= $_POST['lokasi'];
	$kondisi		= $_POST['kondisi'];
	$jumlah_barang  = $_POST['jumlah_barang'];
	$sumber_dana	= $_POST['sumber_dana'];
    
  // update user data
mysqli_query($conn, "UPDATE barang SET id_barang='$id_barang',nama_barang='$nama_barang',spesifikasi='$spesifikasi',lokasi='$lokasi',
kondisi='$kondisi',jumlah_barang='$jumlah_barang',sumber_dana='$sumber_dana' WHERE id_barang='$id_barang'");
  
  // Redirect to homepage to display updated user in list
 header("Location: ../data-barang.php");
}
?>