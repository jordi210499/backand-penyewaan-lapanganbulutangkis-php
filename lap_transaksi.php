<h2>Cetak Laporan Transaksi</h2>
<br>
<h5>Pilih tanggal</h5>
<div class="row">
	<!-- <h5>Pilih tanggal</h5> -->
	<div class="col-md-6">
		<form method="post" action="../tcpdf/lap_transaksi2.php">
			<div class="row">
				<div class="col-md-5"> 
					<input type="date" name="dari" class="form-control" value="<?php echo isset($_POST) && isset($_POST['dari']) ? $_POST['dari'] : '' ?>">
				</div>

				<div class="col-md-2">
					<label>Sampai</label>
				</div>
				<div class="col-md-5">
					<input type="date" name="sampai" class="form-control" value="<?php echo isset($_POST) && isset($_POST['sampai']) ? $_POST['sampai'] : '' ?>">
				</div>
			</div>

		</div>
		<div class="col-md-6">
			<input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary">
		</div>
	</form>
</div>
<?php 
/**
<?php 
$user='root';
$host='localhost';
$pass='';

if (!$koneksi=mysqli_connect($host,$user,$pass)) {
	
	echo "koneksi error";
	exit;
}

if (!mysqli_select_db($koneksi,"lapanganfutsal")) {
	
	echo "database tak tersedia";
	exit;
}
$qwr = '';
if (isset($_POST['tampilkan'])) {
	// echo "ooo";die;
	$dari = $_POST['dari'];
	// echo $dari;die;
	$sampai = $_POST['sampai'];
	// echo "SELECT * FROM booking WHERE tanggal between '$dari' AND '$sampai' ORDER BY tanggal DESC";

	$qwr = mysqli_query($koneksi,"SELECT * FROM booking WHERE tanggal between '$dari' AND '$sampai' ORDER BY tanggal DESC");
}
// echo mysqli_num_rows($qwr) == 0 ? 'yes':'no';die;
?>
<br>

<table border="1" class="table table-hover table-bordered">
	<thead>
		<tr>
			<th><h7>kode booking</h7></th>
			<th><h7>tanggal</h7></th>
			<th><h7>Status</h7></th>
			<th><h7>total bayar</h7></th>
			<th><h7>Bukti Transfer</h7></th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ($qwr != '') {
		 foreach ($qwr as $item) { 
		 	?>
			
			<tr>
				<td><h7><?php echo $item['kd_booking'] ?></h7></td>
				<td><h7><?php echo date('d-m-Y', strtotime($item['kd_booking'])) ?></h7></td>
				<td><h7><?php echo $item['status'] ?></h7></td>
				<td><h7>Rp. <?php echo number_format($item['total_bayar']) ?></h7></td>
				<td><h7><a target="_blank" href="../img/bukti_tf/<?php echo $item['bukti_transfer'] ?>"><img src="../img/bukti_tf/<?php echo $item['bukti_transfer'] ?>" width="50px"></a></h7></td>
			</tr>
		<?php } } ?>
	</tbody>

</table>
<center><button class="btn btn-primary" title="Cetak Laporan" onclick="window.print()"><i class="fa fa-print"></i></button></center>
*/

 ?>