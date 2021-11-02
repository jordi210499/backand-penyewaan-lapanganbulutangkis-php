<?php 
include "connect.php";
session_start();

$kd_transaksi = $_GET['code'];
$kd_booking = $_GET['kd_booking'];
// echo $kd_transaksi;die;

mysqli_query($koneksi, "DELETE FROM booking_detail WHERE kd_booking='$kd_booking'") or die(mysqli_error($koneksi));
$save = mysqli_query($koneksi, "UPDATE transaksi SET status='2', sisa_bayar='Lunas' WHERE kd_transaksi='$kd_transaksi'") or die(mysqli_error($koneksi));

if ($save) {
	echo "<script>alert('Transaksi berhasil');window.location='index.php?page=Transaksi'</script>";
}else{
	echo "<script>alert('Transaksi gagal');window.location='".$_SERVER['HTTP_REFERER']."'</script>";
}
?>