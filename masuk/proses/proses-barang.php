<?php 
// koneksi database
$conn = mysqli_connect("localhost","root","","sarana");

// menangkap data yang di kirim dari form
$nama_barang 		= $_POST['nama_barang'];
$spesifikasi		= $_POST['spesifikasi'];
$lokasi				= $_POST['lokasi'];
$kondisi			= $_POST['kondisi'];
$jumlah_barang		= $_POST['jumlah_barang'];
$sumber_dana		= $_POST['sumber_dana'];
$tgl_masuk 			= $_POST['tgl_masuk'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO barang(nama_barang, spesifikasi, lokasi, kondisi, jumlah_barang, sumber_dana) 
								value ('$nama_barang','$spesifikasi','$lokasi','$kondisi','$jumlah_barang','$sumber_dana') ");
mysqli_query($conn,"INSERT INTO barang_masuk(nama_barang, tgl_masuk, jml_masuk, sumber_dana) 
								value ('$nama_barang','$tgl_masuk','$jumlah_barang','$sumber_dana') ");
// mengalihkan halaman ke index.php
header("location:../data-barang.php");

?>