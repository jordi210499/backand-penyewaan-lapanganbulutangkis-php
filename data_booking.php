<h2>Data Booking</h2>
<table class="table table-bordered table-hover" border="1">
	<thead>
		<tr>
			<th><h5>Kode Booking</h5></th>
			<th><h5>Nama Member</h5></th>
			<th><h5>Tanggal Booking</h5></th>
			<th><h5>Kode Lapangan</h5></th>
			<th><h5>Jam Mulai</h5></th>
			<th><h5>DP Booking</h5></th>
			<th><h5>Bukti Transfer</h5></th>
			<th><h5>Opsi</h5></th>
			<!-- <th><h7>status bayar</h7></th> -->

		</tr>
	</thead>
	<?php
	include ('../connect.php');
	$q=mysqli_query($koneksi,"SELECT booking.*, jb.jam as jam FROM booking JOIN booking_detail bd ON bd.kd_booking=booking.kd_booking JOIN jam_booking jb ON jb.jam_kd=bd.jam_kd");
	// echo "<pre>";
	// print_r($q);
	// echo "</pre>";
		foreach ($q as $val) { ?>
			<tr>
				<td><?php echo $val['kd_booking'] ;?></td>
				<td><?php echo $val['sewa_nama'] ;?></td>
				<td><?php echo $val['tanggal'] ;?></td>
				<td><?php echo $val['kd_lapangan'] ;?></td>
				<td><?php echo $val['jam'] ;?></td>
				<td>Rp. <?php echo number_format($val['sewa_dp']) ;?></td>
				<td>
					<?php if ($val['bukti_transfer'] != ''): ?>
						<a href="../img/bukti_tf/<?php echo $val['bukti_transfer'] ?>">Lihat</a>
						<?php else: ?>
							<div class="badge badge-danger">Belum bayar</div>
						<?php endif ?>
					</td>
					<td>
						<!-- <a href="" class="btn btn-warning" title="Detail Booking"><i class="fa fa-eye"></i></a> -->
						<?php if ($val['bukti_transfer'] != '' && $val['status'] == 'booking'): ?>
							<a href="simpan_transaksi.php?code=<?php echo $val['kd_booking'] ?>" class="btn btn-primary" title="Konfirmasi booking"><i class="fa fa-check"></i></a>
						<?php endif ?>

						<?php if ($val['status'] == 'sudah dikonfirmasi'): ?>
							<div class="btn btn-success" title="Sudah dikonfirmasi"><i class="fa fa-check"></i></div>
						<?php endif ?>
					</td>
				</tr>

				<?php
			}
			?>
		</table>