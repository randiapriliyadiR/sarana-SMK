<?php
$conn = mysqli_connect("localhost","root","","sarana");
$result = mysqli_query($conn, "SELECT * FROM barang where id_barang");
 
$id_barang = $_GET['id_barang'];
 

$result = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang=$id_barang");
 
while($d = mysqli_fetch_array($result))
{
	$nama_barang	= $d['nama_barang'];
	$spesifikasi	= $d['spesifikasi'];
	$lokasi 		= $d['lokasi'];
	$kondisi		= $d['kondisi'];
	$jumlah_barang	= $d['jumlah_barang'];
	$sumber_dana	= $d['sumber_dana'];
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

<form action="proses/ubah-barang.php" method="post" name="form1">
					<div class="col s12 m12 l12 card-panel z-depth"> <br>
						<table class="highlight">
							<!--kolom isian table-->
							
							<tr> 
					        	<td>Nama Barang</td>
					        	<td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
					      	</tr>
					      	<tr> 
					        	<td>Spesifikasi</td>
					        	<td><input type="text" name="spesifikasi" value=<?php echo $spesifikasi;?>></td>
					      	</tr>
					      	<tr> 
					        	<td>Lokasi</td>
					        	<td><input type="text" name="lokasi" value=<?php echo $lokasi;?>></td>
					      	</tr>
							
							<tr> 
					        	<td>Kondisi</td>
					        	<td><select name="kondisi">
								<option value="baik">Baik</option>
								<option value="kurang_baik">Kurang Baik</option>
								<option value="rusak">Rusak</option></td>
					      	</tr>
							
							<tr> 
					        	<td>Jumlah Barang</td>
					        	<td><input type="text" name="jumlah_barang" value=<?php echo $jumlah_barang;?>></td>
					      	</tr>
							
							<tr> 
					        	<td>Sumber Dana</td>
					        	<td><input type="text" name="sumber_dana" value=<?php echo $sumber_dana;?>></td>
					      	</tr>
							
					      	<tr>
				            	<td><input type="hidden" name="id_barang" value=<?php echo $_GET['id_barang'];?>></td>
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
