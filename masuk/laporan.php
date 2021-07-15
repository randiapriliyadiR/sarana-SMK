<!DOCTYPE html>
<html>
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
include "header.php";
?>
<div class="wrapper">
	<div class="container">
		<div class="row">
<?php
include "navbar.php";
?>
<div class="span9">
	<div class="content">

<div class="module">
	<div class="module-head">
		<h3>Bakup Laporan</h3>
	</div>
<div class="module-body">
	<table class="table">
	<thead>
		<tr>
		<th>Data User</th>
		<th>Data Barang</th>
		<th>Data Pinjam</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<td><a href="printuser.php" target="_BLANK">
			<img src=" ../images/excel-off.png" width="128px" height="128px" 
			onmouseover="this.src=' ../images/excel-on.png'" onmouseout="this.src=' ../images/excel-off.png'"/></a>
		</td>
		<td><a href="printbarang.php" target="_BLANK">
			<img src=" ../images/excel-off.png" width="128px" height="128px"
			onmouseover="this.src=' ../images/excel-on.png'" onmouseout="this.src=' ../images/excel-off.png'"/></a>
		</td>
		<td><a href="printpinjam.php" target="_BLANK">
			<img src=" ../images/excel-off.png" width="128px" height="128px"
			onmouseover="this.src=' ../images/excel-on.png'" onmouseout="this.src=' ../images/excel-off.png'"/></a>
		</td>
		</tr>
	</tbody>
	</table>
	</div>
</div>

<div class="module">
	<div class="module-head">
		<h3>Cetak Laporan</h3>
	</div>
<div class="module-body">
	<table class="table">
	<thead>
		<tr>
		<th>Data User</th>
		<th>Data Barang</th>
		<th>Data Pinjam</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<td><a href="cetakuser.php" target="_BLANK">
			<img src=" ../images/print-off.png" width="128px" height="128px" 
			onmouseover="this.src=' ../images/print-on.png'" onmouseout="this.src=' ../images/print-off.png'"/></a>
		</td>
		<td><a href="cetakbarang.php" target="_BLANK">
			<img src=" ../images/print-off.png" width="128px" height="128px"
			onmouseover="this.src=' ../images/print-on.png'" onmouseout="this.src=' ../images/print-off.png'"/></a>
		</td>
		<td><a href="cetakpinjam.php" target="_BLANK">
			<img src=" ../images/print-off.png" width="128px" height="128px"
			onmouseover="this.src=' ../images/print-on.png'" onmouseout="this.src=' ../images/print-off.png'"/></a>
		</td>
		</tr>
	</tbody>
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