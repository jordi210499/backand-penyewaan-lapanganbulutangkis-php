<h2>Data Transaksi</h2>



<table border="1" class="table table-hover table-bordered">
	<tr>
		<th><h5>Kode Transaksi</h5></th>
		<th><h5>Kode Booking</h5></th>
		<th><h5>Kode Lapangan</h5></th>
		<!-- <th><h7>DP Booking</h7></th> -->
		<th><h5>Tanggal Transaksi</h5></th>
		<th><h5>Status Main</h5></th>
		<th><h5>Total Bayar</h5></th>
		<th><h5>Sisa Bayar</h5></th>
		<th><h5>Opsi</h5></th>
	</tr>
<?php
include ('../connect.php');
$q=mysqli_query($koneksi,"SELECT * FROM transaksi WHERE status!=0");
while ($row=mysqli_fetch_array($q)){
?>

	<tr>
		<td><?php echo $row['kd_transaksi'] ;?></td>
		<td><?php echo $row['kd_booking'] ;?></td>
		<td><?php echo $row['kd_lapangan'] ;?></td>
		<!-- <td>Rp. <?php echo number_format($row['dp_booking'])?></td> -->
		<td><?php echo date('d-m-Y', strtotime($row['tanggal_transaksi']));?></td>
		<td><?php echo $row['status'] == 1 ? '<div class="badge badge-warning">Belum main</div>' : '<div class="badge badge-success">Selesai</div>';?></td>
		<td>Rp. <?php echo number_format($row['total_bayar'])?></td>
		<td><?php echo $row['sisa_bayar']?></td>
		<td>
			<?php if ($row['sisa_bayar'] != 'Lunas'): ?>
				
			<a href="sudah_bayar.php?code=<?php echo $row['kd_transaksi'] ?>&kd_booking=<?php echo $row['kd_booking'] ?>" class="btn btn-primary">Sudah Bayar</a>
			<?php endif ?>
		</td>
	</tr>

<?php
}
?>
