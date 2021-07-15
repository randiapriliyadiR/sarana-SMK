<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data pinjam.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Pinjam Sarana Prasarana SMKN 12 Kabupaten Tangerang</title>
</head>
<body>
	<center>
 
		<h2>Cetak Laporan Data Pinjam Sarana Prasarana</h2>
		<h4> SMKN 12 Kabupaten Tangerang</h4>
 
	</center>
 
	<?php 
	$conn = mysqli_connect("localhost","root","","sarana");
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th>ID</th>
			<th>Nama Peminjam</th>
			<th>Tanggal Pinjam</th>
			<th>ID Barang</th>
			<th>Jumlah Barang</th>
			<th>Tanggal Kembali</th>
			<th>Kondisi</th>
		</tr>
		<?php 
		$conn = mysqli_connect("localhost","root","","sarana");
		$data_tabel = mysqli_query($conn,"select * from pinjam_barang");
		while($data = mysqli_fetch_array($data_tabel)){
		?>
		<tr>
			<td><?php echo $data['id_peminjam'] ?></td>
			<td><?php echo $data['peminjam']; ?></td>
			<td><?php echo $data['tgl_peminjam']; ?></td>
			<td><?php echo $data['id_barang']?></td>
			<td><?php echo $data['jml_barang']; ?></td>
			<td><?php echo $data['tgl_kembali']; ?></td>
			<td><?php echo $data['kondisi']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>