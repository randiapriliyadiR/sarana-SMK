<?php
$conn = mysqli_connect("localhost","root","","sarana");
$id_user=$_REQUEST['id_user'];
$query = "DELETE FROM user WHERE id_user=$id_user"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: data-user.php"); 
?>