<?php 
// koneksi database
$conn = mysqli_connect("localhost","root","","sarana");

// menangkap data yang di kirim dari form
$nama 		= $_POST['nama'];
$username 	= $_POST['username'];
$password 	= md5($_POST['password']);
$level		= $_POST['level'];

// menginput data ke database
mysqli_query($conn,"insert into user values('','$nama','$username','$password','$level')");

// mengalihkan halaman ke index.php
header("location:../index.php");

?>