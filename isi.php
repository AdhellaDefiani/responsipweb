<form name="form1" method="post" action="order.php">
	<table width="58%" border="0" align="center">
			<tr>
				<td>Tanggal</td>
				<td><input name="tanggal" type="text" id="tanggal"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input name="nama" type="text" id="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input name="alamat" type="text" id="alamat"></td>
			</tr>
			<tr>
				<td>Jenis Mobil</td>
				<td><select name="jenismobil" id="jenismobil">
					<option value="alphard">Alphard</option>
					<option value="innova">Innova</option>
					<option value="hyundai">Hyundai</option>
					<option value="livina">Livina</option>
					<option value="alya">Alya</option>
					<option value="avanza">Avanza</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Lama Sewa</td>
				<td><select name="lamasewa" id="lamasewa">
					<option value="4 hari">4 Hari</option>
					<option value="1 hari">1 Hari</option>
					<option value="3 hari">3 Hari</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Harga Sewa</td>
				<td><input name="hargasewa" type="text" id="hargasewa"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="Submit" value="Order"><input type="reset"name="Submit2" value="Ulang">
				</td>
			</tr>
		</table>
	</form>
	<div align="center"><strong><a href="order.php"></a></strong></div>
</form>