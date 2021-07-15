<?php 
// koneksi database
$conn = mysqli_connect("localhost","root","","sarana");
 
// menangkap data id user yang di kirim dari url
$id_peminjam = $_GET['id_peminjam'];
 
 
// menghapus user dari database
$sql	='DELETE FROM pinjam_barang WHERE id_peminjam="'.$id_peminjam.'"';
$query	=mysqli_query($conn,$sql);
 
// mengalihkan halaman kembali ke data-user.php
header("location:data-pinjam.php");
 
?>