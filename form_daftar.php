<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<style>
		body{
			background: rgb(34, 193, 195);
			background: linear-gradient(90deg, rgba(34, 193, 195, 1) 0%, rgba(240, 45, 253,1) 100%);
		}
	</style>
</head>
<body>
	<h2>Selamat Datang Di Halaman Pendaftaran</h2>
	<p>Silahkan Diisi</p>
	<br>
	<form method="post" action="proses_daftar.php">
		<fieldset>
			<legend>Pendaftaran</legend>
			<table>
				<tr>
					<td>Nama :</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama..."></td>
				</tr>
				<tr>
					<td>email :</td>
					<td><input type="email" name="email" placeholder="Masukkan email..."></td>
				</tr>
				<tr>
					<td>Tanggal Lahir :</td>
					<td><input type="date" name="tgl_lahir"></td>
				</tr>
				<tr>
					<td>Alamat :</td>
					<td><textarea name="alamat" cols="20%" rows="2" placeholder="Masukkan Alamat..."></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Daftar"></td>
				</tr>
			</table>
		</fieldset>

</body>
</html>