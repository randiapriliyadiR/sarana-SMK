<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sarana Prasarana SMKN 12 Kabupaten Tangerang</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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

						<li><a href="index.php">
							Login
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
					<form action="proses/daftar-proses.php" class="form-vertical" method="POST">
						<div class="module-head">
							<h3>DAFTAR</h3>
						</div>
						<div class="module-body">
						
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="nama" placeholder="Nama">
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="username" placeholder="Username">
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="password" placeholder="Password">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="jabatan">Jabatan</label>
								<div class="controls">
								<select name="level">
									<option value="peminjam">Peminjam</option>
									<option value="manajemen">Manajemen</option>
									</select>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Daftar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<?php
	include "masuk/footer.php";
	?>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>