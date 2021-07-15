<?php
$conn = mysqli_connect("localhost","root","","sarana");
$result = mysqli_query($conn, "SELECT * FROM pinjam_barang where id_peminjam");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
	$id_peminjam		= $_POST['id_peminjam'];
	$peminjam			= $_POST['peminjam'];
	$tgl_peminjam		= $_POST['tgl_peminjam'];
	$id_barang			= $_POST['id_barang'];
	$jml_barang			= $_POST['jml_barang'];
	$tgl_kembali		= $_POST['tgl_kembali'];
	$kondisi			= $_POST['kondisi'];
    
  // update user data
mysqli_query($conn, "UPDATE pinjam_barang SET id_peminjam='$id_peminjam',peminjam='$peminjam',tgl_peminjam='$tgl_peminjam',id_barang='$id_barang',
jml_barang='$jml_barang',tgl_kembali='$tgl_kembali',kondisi='$kondisi' WHERE id_peminjam='$id_peminjam'");
  
  // Redirect to homepage to display updated user in list
 header("Location: ../data-pinjam.php");
}
?>