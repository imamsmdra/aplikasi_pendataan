<!DOCTYPE html>
<html>

<?php
include "koneksi.php"
?>


<head>
	<title>Daftar Peserta</title>
</head>
<body style="background-image: url(poto.jpg); background-size: cover;">
	<h2>Daftar Peserta</h2>
	<hr>
	<a href="form_daftar.php">Pendaftaran |</a>
	<a href="admin.php">Event |</a>
	<a href="home.php">Logout</a>
	<hr>

<h3>Nama Peserta Event</h3>
<p>
	<table border="1" width="40%">
		<tr>
			<td align="center"><strong>NO</strong></td>
			<td align="center"><strong>Nama Peserta</strong></td>
			<td align="center"><strong>Email</strong></td>
			<td align="center"><strong>TTL</strong></td>
			<td align="center"><strong>Alamat</strong></td>
			<td align="center"><strong>Opsi</strong></td>
		</tr>
<?php
include "koneksi.php";
$tampil = mysqli_query($mysqli, "select * from pendaftaran");
$no = 1;
while($hasil = mysqli_fetch_array($tampil)){
?>
<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $hasil['nama']; ?></td>
	<td><?php echo $hasil['email']; ?></td>
	<td><?php echo $hasil['tgl_lahir']; ?></td>
	<td><?php echo $hasil['alamat']; ?></td>
	<td><a href="hapus_peserta.php?hapus&id=<?php echo $hasil['id']; ?>"> Hapus</a></td>
</tr>
<?php
}
?>
	</table>
</p>
<a href="admin.php">- Kembali</a>
</body>
</html>