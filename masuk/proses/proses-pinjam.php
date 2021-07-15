<?php 
// koneksi database
$conn = mysqli_connect("localhost","root","","sarana");

// menangkap data yang di kirim dari form
$peminjam 		= $_POST['peminjam'];
$tgl_peminjam	= $_POST['tgl_peminjam'];
$id_barang		= $_POST['id_barang'];
$jml_barang		= $_POST['jml_barang'];
$tgl_kembali	= $_POST['tgl_kembali'];
$kondisi		= $_POST['kondisi'];

$hasil = mysqli_query($conn,"SELECT * FROM barang WHERE id_barang='$id_barang'");
while($data=mysqli_fetch_assoc($hasil)){
	$nama_barang = $data['nama_barang'];
	$lokasi		 = $dta['lokasi'];
}

// menginput data ke database
mysqli_query($conn,"INSERT INTO pinjam_barang(peminjam, tgl_peminjam, id_barang, jml_barang, tgl_kembali, kondisi) 
								value ('$peminjam','$tgl_peminjam','$id_barang','$jml_barang','$tgl_kembali','$kondisi') ");

mysqli_query($conn,"INSERT INTO barang_keluar(id_barang, nama_barang, tgl_keluar, jml_keluar, lokasi, penerima)
								value ('$id_barang','$nama_barang','$tgl_peminjam','$jml_keluar','$lokasi', '$peminjam') ");
// mengalihkan halaman ke index.php
header("location:../data-pinjam.php");

?>