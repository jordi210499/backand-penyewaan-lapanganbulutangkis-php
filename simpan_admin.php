<?php
include "connect.php";
if (isset($_POST['submit'])) {
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
	$kd_admin = $_POST['kd_admin'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
		// echo $kd_admin;die;

	$save = mysqli_query($koneksi,"INSERT INTO admin (kd_admin,nama_lengkap,username,password) VALUES('$kd_admin','$nama','$username','$password')");
	if ($save) {
		echo "<script>alert('Admin berhasil ditambahkan);window.location='index.php?page=data_admin'</script>";
	} else {
        // $_SESSION['error'] = "Kombinasi username dan password salah. Ulangi";
		echo "<script>alert('Admin gagal ditambahkan');window.location='index.php?page=data_admin'</script>";
	}
}
?>