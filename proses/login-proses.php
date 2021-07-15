<?php
// mengaktifkan session 
session_start();

//menghubungkan ke koneksi database
require_once '../config/koneksi.php';

//menangkap data yang dikirim
$username 	= $_POST['username'];
$password	= md5($_POST['password']);


if (empty($username) || empty($password)) {
	header('Location: ../index.php');
}

$sql 	= "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
$query 	= $conn->query($sql);
$result = $query->fetch_assoc();

if ($query->num_rows > 0) {
	
	$_SESSION['user'] = $result['username'];
	$_SESSION['id_user'] = $result['id_user'];
	
	if ($result['level'] == 'admin') {
		$_SESSION['ADMIN'] = "admin";
		header('Location: ../masuk/index.php');
		
	}else if ($result['level'] == "manajemen") {
		$_SESSION['MANAJEMEN'] = "manajemen";
		header('Location: ../masuk/index.php');
		
	}else if  ($result['level'] == "peminjam"){
		$_SESSION['PEMINJAM'] = "peminjam";
		header('Location: ../masuk/index.php');
	}

} else {

	header('Location: ../index.php');
	
}
?>