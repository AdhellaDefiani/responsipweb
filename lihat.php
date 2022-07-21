<?php
	echo"<head><title>Responsi pweb</title></head>";
	$fp = fopen("responsi.txt", "r");
	echo "<center><h1>Data Pesanan</h1>";
	echo "<a href='jenis.php'>::Order::</a>";
	echo "<hr>";
	echo "<table border=1 style=text-align: center width=80%>";
	echo "<tr><td>Tanggal</td><td>Nama</td><td>Alamat</td><td>Jenis Mobil</td><td>Lama Sewa</td><td>Harga Sewa</td></tr>";

	while($isi = fgets($fp,80))
	{
		$pisah = explode("|", $isi);	
		echo "<tr><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td><td>$pisah[5]</td><tr>";
	}
	echo"</table></center>"; 
?>