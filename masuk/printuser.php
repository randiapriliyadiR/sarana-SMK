<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data User.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data User Sarana Prasarana SMKN 12 Kabupaten Tangerang</title>
</head>
<body>
 
	<center>
 
		<h2>Bakup Data User Sarana Prasarana</h2>
		<h4> SMKN 12 Kabupaten Tangerang</h4>
 
	</center>
 
	<?php 
	$conn = mysqli_connect("localhost","root","","sarana");
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Jabatan</th>
		</tr>
		<?php 
		$conn = mysqli_connect("localhost","root","","sarana");
		$data_tabel = mysqli_query($conn,"select * from user");
		while($data = mysqli_fetch_array($data_tabel)){
		?>
		<tr>
			<td><?php echo $data['id_user'] ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']?></td>
			<td><?php echo $data['level']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	
 
</body>
</html>