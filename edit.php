<?php
include ('../connect.php');
if(isset($_GET['kd'])){
	$kd = $_GET['kd'];
	$query = mysqli_query($koneksi,"SELECT * from lapangan WHERE kd_lapangan =  '$kd'");
	$prod = mysqli_fetch_array($query);
}
else $kd = "";

if (isset($_POST['update'])){
	$harga_siang = $_POST['harga_siang'];
	$harga_malam = $_POST['harga_malam'];
if($harga_siang == "" or $harga_malam==""){
	echo "<script>alert('masih ada data yang kosong .');
	document.location = 'index.php?page=input_lapangan';</script>";
} else {
	if (isset($_FILES["gambar_lapangan"]["tmp_name"]))
	{
		$gambar_lapangan = $_FILES["gambar_lapangan"]["name"];
		$gambar_lapangan = stripcslashes($gambar_lapangan);
		$gambar_lapangan = str_replace("'","",$gambar_lapangan);
		$gambar_lapangan = str_replace(" ","-",$gambar_lapangan);
		$gambar_lapangan = substr($gambar_lapangan, -20);
		$gambar_lapangan = rand(100,999).$gambar_lapangan;
		move_uploaded_file($_FILES["gambar_lapangan"]["tmp_name"], "../img/lapangan/$gambar_lapangan");	
		$update = mysqli_query($koneksi,"UPDATE lapangan SET
			harga_siang = '$harga_siang',
			harga_malam = '$harga_malam',
			gambar_lapangan = '$gambar_lapangan' WHERE kd_lapangan = '$kd'") or die (mysqli_error());
	} else {
		$update= mysqli_query($koneksi,"UPDATE lapangan SET
			harga_siang = '$harga_siang',
			harga_malam = '$harga_malam',
			gambar_lapangan = '$_POST[gambartxt]'
			where kd_lapangan = '$kd'") or die (mysqli_error());
	}
	if($update){
		echo "<script>alert('data berhasil di update !');
		document.location = 'index.php?page=lapangan';</script>";
	} else {
		echo "<script>alert<'gagal mas bro !');
		document.location = 'index.php?page=lapangan';</script>";
		}
	}
}
?>
<div>
	<h2> Input Lapangan </h2>
	<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>harga siang</td>
			<td>:</td>
			<td><input type="text" name="harga_siang" placeholder="harga_siang" value="<?php echo "$prod[harga_siang]";?>"></td>
		</tr>
		<tr>
			<td>harga malam</td>
			<td>:</td>
			<td><input type="text" name="harga_malam" placeholder="harga_malam" value="<?php echo "$prod[harga_malam]";?>"></td>
			
		</tr>
		<tr>
			<td>gambar lapangan</td>
			<td>:</td>
			<td><input type="file" name="gambar_lapangan" size="50" id="lik">
			<input typpe="hidden" name="gambartxt" value="<?php echo "$prod[gambar_lapangan]";?>"><?php echo "$prod[gambar_lapangan]";?></td>
		</tr>
		<tr>
		<td colspan= "3" align="center"><input type="submit" name="update" value="update" id="lik"></td>
		</tr>
	</table>
	</form>
</div>
