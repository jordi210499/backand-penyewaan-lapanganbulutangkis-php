<?php 
include ('../connect.php');
$kd = $_GET['kd'];
$hapus = mysqli_query($koneksi,"DELETE FROM member WHERE kd_member='$kd'");
if ($hapus)
{
	echo"<script>window.alert('member berhasil di hapus');
	document.location='index.php?page=member' </script>";
} 
	else
{
echo"gagal";
}
?>