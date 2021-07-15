<?php
$conn = mysqli_connect("localhost","root","","sarana");
$result = mysqli_query($conn, "SELECT * FROM user where id_user");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
  $id_user 	= $_POST['id_user'];
  $nama		=$_POST['nama'];
  $username	=$_POST['username'];
  $level 	=$_POST['level'];
    
  // update user data
mysqli_query($conn, "UPDATE user SET id_user='$id_user',nama='$nama',username='$username',level='$level' WHERE id_user=$id_user");
  
  // Redirect to homepage to display updated user in list
 header("Location: ../data-user.php");
}
?>