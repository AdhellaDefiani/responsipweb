<?php
	$tanggal  	 = $_POST['tanggal'];
	$nama     	 = $_POST['nama'];
	$alamat   	 = $_POST['alamat'];
	$jenismobil  = $_POST['jenismobil'];
	$lamasewa	 = $_POST['lamasewa'];
	$hargasewa	 = $_POST['hargasewa'];

	 echo"<head><title>Responsi pweb</head></title>";
	 $fp = fopen("responsi.txt", "a+");
	 fputs($fp,"$tanggal|$nama|$alamat|$jenismobil|$lamasewa|$hargasewa\n");
	 fclose($fp);

	 echo"Terima Kasih Telah Order<br>";
	 echo"<a href=lihat.php>Lihat orderan</a><br>"; 
?>