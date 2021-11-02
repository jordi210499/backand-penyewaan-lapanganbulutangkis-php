<?php 
include ('../connect.php');
$kd = $_GET['kd'];
$hapus = mysqli_query($koneksi,"DELETE FROM lapangan WHERE kd_lapangan='$kd'");
if ($hapus)
{
	echo"<script>window.alert('lapangan berhasil di hapus');
	document.location='index.php?page=lapangan' </script>";
} 
	else
{
echo"gagal";
}
?>