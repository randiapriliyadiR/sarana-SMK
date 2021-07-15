
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
<?php
include_once "header.php";
?>
<div class="wrapper">
	<div class="container">
		<div class="row">
<?php 
include_once "navbar.php";
?>
<div class="span9">
<div class="content">
	<div class="module">
	
							
							<div class="module-head">
								<h3>Data Barang</h3>
							</div>
							<div class="module-body">
								<p>
									<strong><a href="tambah-barang.php">+ Barang Masuk </a></strong>
								</p>
								<table class="table table-striped table-bordered table-condensed">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nama Barang</th>
											<th>Spesifikasi</th>
											<th>Lokasi</th>
											<th>Kondisi</th>
											<th>Jumlah Barang</th>
											<th>Sumber Dana</th>
											<th>Edit</th>
											</thead>
									
<?php 

$conn = mysqli_connect("localhost","root","","sarana");
$data = mysqli_query($conn,"select * from barang");
while($d = mysqli_fetch_array($data)){
?>
<tbody>
<tr class="odd gradeX">
<td><?php echo $d['id_barang']; ?></td>
<td><?php echo $d['nama_barang']; ?></td>
<td><?php echo $d['spesifikasi']; ?></td>
<td><?php echo $d['lokasi']; ?></td>
<td><?php echo $d['kondisi']; ?></td>
<td><?php echo $d['jumlah_barang']; ?></td>
<td><?php echo $d['sumber_dana']; ?></td>
<td><a href="edit-barang.php?id_barang=<?php echo $d['id_barang'];?>">Edit Barang</a><br>
    <a href="hapus-data.php?id_barang=<?php echo $d['id_barang'];?>">Barang Keluar</a></td>
</tr>
</tbody>
<?php 
}
?>

								</table>
							</div>
						</div>
							
		</div>
	</div>
</div>
</div>
</div>
<?php
include "footer.php";
?>
<script src=" ../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src=" ../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src=" ../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src=" ../scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src=" ../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src=" ../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src=" ../scripts/common.js" type="text/javascript"></script>
</body>
</html>