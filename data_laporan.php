<h2>Data Laporan</h2>
<table border="1">
	<tr>
		<th><h7>no laporan</h7></th>
		<th><h7>kode transaksi</h7></th>
		<th><h7>kode member</h7></th>
		<th><h7>total bayar</h7></th>
		<th><h7>Tanggal</h7></th>
		<th><h7>konfirmasi status</h7></th>
		


	</tr>
<?php
include ('../connect.php');
$q=mysqli_query($koneksi,"SELECT * FROM laporan");
while ($row=mysqli_fetch_array($q)){
	$no_lap = $row[0];
	$kd_transaksi = $row[1];
	$kd_member = $row[2];
	$total_bayar= $row[3];
	$Tanggal = $row[4];
	$konfirmasi_status= $row[5];
	
?>

	<tr>
		<td><?php echo $no_lap ;?></td>
		<td><?php echo $kd_transaksi ;?></td>
		<td><?php echo $kd_member ;?></td>
		<td><?php echo $total_bayar ;?></td>
		<td><?php echo $Tanggal;?></td>
		<td><?php echo $konfirmasi_status;?></td>
		
	</tr>

<?php
}
?>
