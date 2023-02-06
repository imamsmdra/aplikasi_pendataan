<?php

include "koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($mysqli, "select * from admin where id='$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<style>
		body{
			background: rgb(34, 193, 195);
			background: radial-gradient(circle at top left, rgba(34, 193, 195, 1) 0%, rgba(240, 45, 253,1) 100%);
		}
	</style>
<fieldset>
<legend><h2>EDIT DATA</h2></legend>
<form method="post" action="proses_edit.php">
	<table>
		<tr>
			<td>Nama Event :</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
				<input type="text" name="nama" value="<?php echo $hasil['nama']?>"></td>
		</tr>
		<tr>
			<td>Tanggal Event :</td>
			<td><input type="date" name="tanggal" value="<?php echo $hasil['tanggal']?>"></td>
		</tr>
		<tr>
			<td>Informasi :</td>
			<td><textarea type="text" name="informasi" cols="50" rows="5" value="<?php echo $hasil['informasi']?>"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
</fieldset>
</form>