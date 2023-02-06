<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<h2>Selamat Datang Di Halaman Pendaftaran</h2>
	<hr>
	<p><strong>Daftarkan Peserta Disini</strong><p>
	<form method="post" action="proses_peserta.php">
		<fieldset>
			<legend>Pendaftaran Peserta</legend>
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