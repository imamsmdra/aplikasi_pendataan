<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
		body{
			background: rgb(34, 193, 195);
			background: linear-gradient(90deg, rgba(34, 193, 195, 1) 0%, rgba(240, 45, 253,1) 100%);
		}
	</style>
</head>
<body>
	<h3>Tambah Event</h3>
	<form method="Post" action="proses_admin.php">
	<fieldset>
		<legend>Tambahkan Event</legend>
		<table>
			<tr>
				<td><label>Nama :</label></td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama..."></td>
			</tr>
			<tr>
				<td><label>Tanggal :</label></td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
					<td>Informasi :</td>
					<td><textarea name="informasi" cols="20%" rows="2" placeholder="Info!!"></textarea></td>
				</tr>
			<tr>
				<td><label><input type="submit" name="submit" value="Masukkan" ></label></td>
			</tr>
		</table>
	</fieldset>
</form>

</body>
</html>