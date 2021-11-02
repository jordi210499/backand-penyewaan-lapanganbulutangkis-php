<?php 
include ('../connect.php');
$kd_admin = $_GET['kd_admin'];
$hapus = mysqli_query($koneksi,"DELETE FROM admin WHERE kd_admin='$kd_admin'");
if ($hapus)
{
	echo"<script>window.alert('member berhasil di hapus');
	document.location='index.php?page=data_admin' </script>";
} 
	else
{
echo"gagal";
}
?>