<h2>Konfirmasi</h2>
<table border="1">
	<tr>
		<th><h7>konfirmasi status</h7></th>
		<th><h7>kode member</h7></th>
		<th><h7>kode transaksi</h7></th>
		<th><h7>bukti transaksi</h7></th>

	</tr>
<?php
include ('../connect.php');
$q=mysqli_query($koneksi,"SELECT * FROM Konfirmasi");
while ($row=mysqli_fetch_array($q)){
	$konfirmasi_status = $row[0];
	$kd_member = $row[1];
	$kd_transaksi = $row[2];
	$bukti_transaksi= $row[3];
	
?>

	<tr>
		<td><?php echo $konfirmasi_status ;?></td>
		<td><?php echo $kd_member ;?></td>
		<td><?php echo $kd_transaksi ;?></td>
		<td><?php echo $bukti_transaksi ;?></td>
	</tr>

<?php
}
?>
