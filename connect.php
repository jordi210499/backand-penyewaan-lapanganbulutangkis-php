<?php 
 $user='root';
 $host='localhost';
 $pass='';

 if (!$koneksi=mysqli_connect($host,$user,$pass)) {
	
 	 echo "koneksi error";
 	exit;
 }

 if (!mysqli_select_db($koneksi,"lapanganbulutangkis")) {
	
 	echo "database tak tersedia";
 	exit;
 }





/*$con = new mysqli('localhost','root','','lapangan_bulutangkis');

if (!$con) {
	die('Koneksi gagal');
}*/
?> 