<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sarana Prasarana SMKN 12 Kabupaten Tangerang</title>
	<link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="../css/theme.css" rel="stylesheet">
	<link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href=" ../css/font.css" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		Sarana Prasarana SMKN 12 Kabupaten Tangerang
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="data-pinjam.php">
							Kembali
						</a></li>

					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form action="proses/proses-pinjam.php" class="form-vertical" method="POST">
						<div class="module-head">
							<h3>DAFTAR BARANG</h3>
						</div>
						<div class="module-body">
						
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="peminjam" placeholder="Nama Peminjam">
								</div>
							</div>
							
							<div class="control-group">
							<label>Tanggal Pinjam</label>
								<div class="controls row-fluid">
									<input class="span12" type="date" name="tgl_peminjam">
								</div>
							</div>
					
						<div class="control-group">
						<div class="controls row-fluid">
						Pilih salah satu Nama Barang: 
						<select name="id_barang">
<?php
$conn = mysqli_connect("localhost","root","","sarana");
$query = "select * from barang";
$hasil = mysqli_query($conn,$query);
while($data=mysqli_fetch_array($hasil)){
    echo "<option value=$data[id_barang]>$data[nama_barang]</option>";
}?>
						</select>
						</div>
					</div>

						
					
						<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="jml_barang" placeholder="Jumlah Barang">
								</div>
							</div>
							
							<div class="control-group">
							<label>Tanggal Kembali</label>
								<div class="controls row-fluid">
									<input class="span12" type="date" name="tgl_kembali">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="kondisi">Kondisi</label>
								<div class="controls">
								<select name="kondisi">
									<option value="baik">Baik</option>
									<option value="kurang_baik">Kurang Baik</option>
									<option value="buruk">Buruk</option>
									</select>
								</div>
							</div>
					
				</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Tambahkan</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<?php
	include "../masuk/footer.php";
	?>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>