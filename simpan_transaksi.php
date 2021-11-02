<?php 
include "connect.php";
session_start();

$kd_booking = $_GET['code'];
// echo $kd_booking;die;

mysqli_query($koneksi, "UPDATE booking SET status='sudah dikonfirmasi' WHERE kd_booking='$kd_booking'") or die(mysqli_error($koneksi));
$save = mysqli_query($koneksi, "UPDATE transaksi SET status='1' WHERE kd_booking='$kd_booking'") or die(mysqli_error($koneksi));

if ($save) {
	echo "<script>alert('Konfimasi Booking berhasil');window.location='index.php?page=Transaksi'</script>";
}else{
	echo "<script>alert('Konfirmasi Booking gagal');window.location='".$_SERVER['HTTP_REFERER']."'</script>";
}
?>