<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Barang.xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Barang Sarana Prasarana SMKN 12 Kabupaten Tangerang</title>
	
</head>
<body>
<center>
	<h2>Cetak Data Barang Sarana Prasarana</h2>
	<h4> SMKN 12 Kabupaten Tangerang</h4>
</center>
 
	<?php 
	$conn = mysqli_connect("localhost","root","","sarana");
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th>ID</th>
			<th>Nama Barang</th>
			<th>Spesifikasi</th>
			<th>Lokasi</th>
			<th>Kondisi</th>
			<th>Jumlah Barang</th>
			<th>Sumber Dana</th>
		</tr>
<?php 
$conn = mysqli_connect("localhost","root","","sarana");
$data = mysqli_query($conn,"select * from barang");
while($d = mysqli_fetch_array($data)){
?>
		<tr>
			<td><?php echo $d['id_barang'] ?></td>
			<td><?php echo $d['nama_barang']; ?></td>
			<td><?php echo $d['spesifikasi']; ?></td>
			<td><?php echo $d['lokasi']; ?></td>
			<td><?php echo $d['kondisi']; ?></td>
			<td><?php echo $d['jumlah_barang']; ?></td>
			<td><?php echo $d['sumber_dana']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

<center>
	<h2>Cetak Data Barang Masuk Sarana Prasarana</h2>
	<h4> SMKN 12 Kabupaten Tangerang</h4>
</center>
<table border="1" style="width: 100%">
		<tr>
			<th>ID</th>
			<th>Nama Barang</th>
			<th>Tanggal Masuk</th>
			<th>Jumlah Barang Masuk</th>
			<th>Sumber Dana</th>
		</tr>
<?php 
$conn = mysqli_connect("localhost","root","","sarana");
$data = mysqli_query($conn,"select * from barang_masuk");
while($d = mysqli_fetch_array($data)){
?>
		<tr>
			<td><?php echo $d['id_barang'] ?></td>
			<td><?php echo $d['nama_barang']; ?></td>
			<td><?php echo $d['tgl_masuk']; ?></td>
			<td><?php echo $d['jml_masuk']; ?></td>
			<td><?php echo $d['sumber_dana']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

<center>
	<h2>Cetak Data Barang Keluar Sarana Prasarana</h2>
	<h4> SMKN 12 Kabupaten Tangerang</h4>
</center>
<table border="1" style="width: 100%">
		<tr>
			<th>ID</th>
			<th>Nama Barang</th>
			<th>Tanggal Keluar</th>
			<th>Jumlah Barang Keluar</th>
			<th>Lokasi</th>
			<th>Penerima</th>
		</tr>
<?php 
$conn = mysqli_connect("localhost","root","","sarana");
$data = mysqli_query($conn,"select * from barang_keluar");
while($d = mysqli_fetch_array($data)){
?>
		<tr>
			<td><?php echo $d['id_barang'] ?></td>
			<td><?php echo $d['nama_barang']; ?></td>
			<td><?php echo $d['tgl_keluar']; ?></td>
			<td><?php echo $d['jml_keluar']; ?></td>
			<td><?php echo $d['lokasi']; ?></td>
			<td><?php echo $d['penerima']; ?></td>
		</tr>
		<?php 
		}
		?>
</table>			

</body>
</html>