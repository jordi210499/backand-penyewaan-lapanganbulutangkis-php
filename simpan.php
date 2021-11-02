<?php 
include ('../connect.php');


if(isset($_POST['input'])){
$kd_lapangan = $_POST['kd_lapangan'];
$harga_siang = $_POST['harga_siang'];
$harga_malam = $_POST['harga_malam'];
$gambar_lapangan = $_FILES['gambar_lapangan'];

if ($kd_lapangan == "" or $harga_siang== "" or $harga_malam == "")
{
	echo "<script>alert('masih ada data yang kosong');
			document.location = 'index.php?page=form';</script>";
}else
{
	if (isset($_FILES["gambar_lapangan"]["tmp_name"]))
	{
		$gambar_lapangan = $_FILES["gambar_lapangan"]["name"];
		$gambar_lapangan = stripcslashes($gambar_lapangan);
		$gambar_lapangan = str_replace("'","",$gambar_lapangan);
		$gambar_lapangan = str_replace(" ","-",$gambar_lapangan);
		$gambar_lapangan = substr($gambar_lapangan, -20);
		$gambar_lapangan = rand(100,999).$gambar_lapangan;
		move_uploaded_file($_FILES["gambar_lapangan"]["tmp_name"], "../img/lapangan/$gambar_lapangan");
	}else{
		$gambar_lapangan = "";
	}

$can=mysqli_query($koneksi,"INSERT INTO lapangan(`kd_lapangan` , `harga_siang` , `harga_malam`,`gambar_lapangan`) VALUES ('$kd_lapangan' , '$harga_siang' , '$harga_malam','$gambar_lapangan')");

if ($can)
{
	echo "<script> document.location = 'index.php?page=lapangan'</script>";
}
	}
}
?>