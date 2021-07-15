<?php
$conn = mysqli_connect("localhost","root","","sarana");
$result = mysqli_query($conn, "SELECT * FROM user where id_user");
 
$id_user = $_GET['id_user'];
 

$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user=$id_user");
 
while($d = mysqli_fetch_array($result))
{
  $nama = $d['nama'];
  $username = $d['username'];
  $level = $d['level'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sarana Prasarana SMKN 12 Kabupaten Tangerang</title>
	<link type="text/css" href=" ../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href=" ../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href=" ../css/theme.css" rel="stylesheet">
	<link type="text/css" href=" ../images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href=" ../css/font.css" rel="stylesheet">
</head>
<body>

<form action="proses/proses-user.php" method="post" name="form1">
					<div class="col s12 m12 l12 card-panel z-depth"> <br>
						<table class="highlight">
							<!--kolom isian table-->
					      	<tr> 
					        	<td>Nama</td>
					        	<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
					      	</tr>
					      	<tr> 
					        	<td>Username</td>
					        	<td><input type="text" name="username" value=<?php echo $username;?>></td>
					      	</tr>
					      	<tr> 
					        	<td>Jabatan</td>
					        	<td><select name="level">
								<option value="admin">Admin</option>
								<option value="manajemen">Manajemen</option>
								<option value="peminjam">Peminjam</option>
								</td>
					      	</tr>
					      	<tr>
				            	<td><input type="hidden" name="id_user" value=<?php echo $_GET['id_user'];?>></td>
				            </tr>
							</table>
					      	<table>
				            <tr>
				            	<th>
				            		<input type="submit" name="update" class="right waves-effect waves-light btn green darken-2" style="float: left;">
				            	</th>
				            </tr>
				        </table>
					</div>
				</form>
</body>
</html>
