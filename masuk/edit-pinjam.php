<?php
$conn = mysqli_connect("localhost","root","","sarana");
$result = mysqli_query($conn, "SELECT * FROM pinjam_barang where id_peminjam");
 
$id_peminjam = $_GET['id_peminjam'];
 

$result = mysqli_query($conn, "SELECT * FROM pinjam_barang WHERE id_peminjam=$id_peminjam");
 
while($d = mysqli_fetch_array($result))
{
	$peminjam		= $d['peminjam'];
	$tgl_peminjam	= $d['tgl_peminjam'];
	$id_barang 		= $d['id_barang'];
	$jml_barang		= $d['jml_barang'];
	$tgl_kembali	= $d['tgl_kembali'];
	$kondisi		= $d['kondisi'];
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

<form action="proses/ubah-pinjam.php" method="post" name="form1">
					<div class="col s12 m12 l12 card-panel z-depth"> <br>
						<table class="highlight">
							<!--kolom isian table-->
							
							<tr> 
					        	<td>Nama Peminjam</td>
					        	<td><input type="text" name="peminjam" value=<?php echo $peminjam;?>></td>
					      	</tr>
					      	<tr> 
					        	<td>Tanggal Peminjam</td>
					        	<td><input type="date" name="tgl_peminjam" value=<?php echo $tgl_peminjam;?>></td>
					      	</tr>
					      	<tr> 
					        	<td>ID Barang</td>
					        	<td><input type="text" name="id_barang" value=<?php echo $id_barang;?>></td>
					      	</tr>
							
							<tr> 
					        	<td>Jumlah Barang</td>
					        	<td><input type="text" name="jml_barang" value=<?php echo $jml_barang;?>></td>
					      	</tr>
							
							<tr> 
					        	<td>Tanggal Kembali</td>
					        	<td><input type="date" name="tgl_kembali" value=<?php echo $tgl_kembali;?>></td>
					      	</tr>
							
							<tr> 
					        	<td>Kondisi</td>
					        	<td><input type="text" name="kondisi" value=<?php echo $kondisi;?>></td>
					      	</tr>
							
					      	<tr>
				            	<td><input type="hidden" name="id_peminjam" value=<?php echo $_GET['id_peminjam'];?>></td>
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
