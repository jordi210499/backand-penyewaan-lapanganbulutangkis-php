<?php 
$page=(empty($_GET['page']))?'':$_GET['page'];

	switch ($page) 
	{
		
		case "data_member":
			include "data_member.php";
			break;

			case "lapangan":
			include "data_lapangan.php";
			break;

			case "booking":
			include "data_booking.php";
			break;

			case "hapus_admin":
			include "hapus_admin.php";
			break;

			case "Transaksi":
			include "data_transaksi.php";
			break;

			case "Laporan":
			include "data_laporan.php";
			break;

			case "form":
			include "form.php";
			break;

			case "edit":
			include "edit.php";
			break;

			case "hapus":
			include "hapus.php";
			break;

			case "edit2":
			include "edit2.php";
			break;

			case "hapus2":
			include "hapus2.php";
			break;

			case "lap_booking":
			include "lap_booking.php";
			break;

			case "lap_transaksi":
			include "lap_transaksi.php";
			break;
			
		default:
			include "beranda.php";
			break;

		
	}


?>