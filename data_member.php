<h3>Tabel Data Member</h3>
<div style="float: left;">
	<a href="index.php?page=form" class="btn btn-primary">Tambah Data</a>
</div>
<div class="well">	
	<table id="member" class="table table-bordered">
		<thead>
			<tr>
				<th><h5>Kode</h5></th>
				<th><h5>Nama Lengkap</h5></th>
				<th><h5>username</h5></th>
				<th><h5>Alamat</h5></th>
				<th><h5>No telp</h5></th>
				<th><h5>Opsi</h5></th>
			</tr>
		</thead>
		<?php
		include ('../connect.php');
		$q=mysqli_query($koneksi,"SELECT * FROM Member");
		while ($row=mysqli_fetch_array($q)){
			?>
			<tr>
				<td><?php echo $row['kd_member'] ;?></td>
				<td><?php echo $row['nama_member'] ;?></td>
				<td><?php echo $row['username'] ;?></td>
				<td><?php echo $row['alamat'] ;?></td>
				<td><?php echo $row['no_telp'] ;?></td>
				<td>
					<button><a href="index.php?page=hapus2&kd=<?php echo $row['kd_member']; ?>">HAPUS</a></button>
				</td>  	
			</tr>

			<?php
		}
		?>
