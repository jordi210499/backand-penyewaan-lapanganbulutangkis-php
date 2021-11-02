<?php
include ('../connect.php');
if(isset($_GET['kd'])){
	$kd = $_GET['kd'];
	$query = mysqli_query($koneksi,"SELECT * from admin WHERE kd_admin =  '$kd'");
	$prod = mysqli_fetch_array($query);
}
else $kd = "";

if (isset($_POST['update'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_lengkap = $_POST['nama_lengkap'];
if($username == "" or $password=="" or $nama_lengkap==""){
	echo "<script>alert('masih ada data yang kosong .');
	document.location = 'index.php?page=input_admin';</script>";
}
if (isset($_POST['update'])){
			$update = mysqli_query($koneksi,"UPDATE admin SET
			username = '$username',
			password = '$password',
			nama_lengkap = '$nama_lengkap' WHERE kd_admin = '$kd'") or die (mysqli_error());
	} else {
		$update= mysqli_query($koneksi,"UPDATE admin SET
			username = '$username',
			password = '$password',
			nama_lengkap = '$nama_lengkap'
			where kd_admin = '$kd'") or die (mysqli_error());
	}
if($update){
		echo "<script>alert('data berhasil di update !');
		document.location = 'index.php?page=admin';</script>";
} else {
		echo "<script>alert<'gagal mas bro !');
		document.location = 'index.php?page=admin';</script>";
		}
	}
?>

<div>
	<h2> Input Admin </h2>
	<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="username" value="<?php echo "$prod[username]";?>"></td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td><input type="text" name="password" placeholder="password" value="<?php echo "$prod[password]";?>"></td>
		</tr>
		<tr>
			<td>nama lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama_lengkap" placeholder="nama_lengkap" value="<?php echo "$prod[nama_lengkap]";?>"></td>
		</tr>
		</tr>
		<tr>
		<td colspan= "3" align="center"><input type="submit" name="update" value="update" id="lik"></td>
		</tr>
	</table>
	</form>
</div>
