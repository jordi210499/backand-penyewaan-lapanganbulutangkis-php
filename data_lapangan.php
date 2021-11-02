<h2>Data Lapangan</h2>
<div style="float: right;">
	<a href="index.php?page=form" class="btn btn-primary">Tambah Data</a>
</div>
<table border="1" class="table table-bordered table-hover">
	<tr>
		<th><h5>kode lapangan</h5></th>
		<th><h5>harga_siang</h5></th>
		<th><h5>harga_malam</h5></th>
		<th><h5>gambar lapangan</h5></th>
		<th colspan="2"><h5>opsi</h5></th>
	</tr>

<?php
include ('../connect.php');
$q=mysqli_query($koneksi,"SELECT * FROM lapangan");
while ($row=mysqli_fetch_array($q))
{
	$kd_lapangan = $row[0];
	$harga_siang = $row[1];
	$harga_malam = $row[2];
	$gambar_lapangan = $row[3];


?>
<!-- }	 -->
	<tr>
		<td><?php echo $kd_lapangan ;?></td>
		<td><?php echo $harga_siang ;?></td>
		<td><?php echo $harga_malam ;?></td>
		
			<td><a href="../img/lapangan/<?php echo $row['gambar_lapangan'];?>">
			<img src="../img/lapangan/<?php echo $row['gambar_lapangan'];?>" width = "150px"/></a></td>		
	<td>
			<button><a href="index.php?page=edit&kd=<?php echo $row['kd_lapangan']; ?>">EDIT</a></button>
			<button><a href="index.php?page=hapus&kd=<?php echo $row['kd_lapangan']; ?>">HAPUS</a></button>
		</td>
	</tr>
<?php
}
?>
 