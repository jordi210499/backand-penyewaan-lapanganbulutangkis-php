<?php 

include('../connect.php');
// print_r($_POST);
$username = $_POST['username'];
$pass = md5($_POST['password']);

$cekadmin = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$pass'");
$admin = mysqli_fetch_assoc($cekadmin);
$count = mysqli_num_rows($cekadmin);
// echo $count;die;
if ($count==1)
{
   session_start();
   $_SESSION['admin'] = $admin;
   echo "<script>document.location='index.php'</script>";
}




?>
