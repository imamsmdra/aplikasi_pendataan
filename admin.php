<!DOCTYPE html>
<html>

<?php
include "koneksi.php"
?>


<head>
	<title>Admin</title>
</head>
<body style="background-image: url(poto.jpg); background-size: cover;">
	<h2>
	Selamat Datang Di Halaman Admin
	</h2>
	<hr>
	<a href="form_daftar.php">Pendaftaran |</a>
	<a href="daftar_peserta.php">Daftar Peserta |</a>
	<a href="home.php">Logout</a>
	<hr>


<h3>DATA EVENT</h3>

<h4><a href="form_admin.php">+ Tambah Daftar Event</a></h4>
<p>
	<table border="1" width="40%">
		<tr>
			<td align="center"><strong>NO</strong></td>
			<td align="center"><strong>Nama Event</strong></td>
			<td align="center"><strong>Tanggal</strong></td>
			<td align="center"><strong>informasi</strong></td>
			<td align="center"><strong>Opsi</strong></td>
		</tr>
<?php
include "koneksi.php";
$tampil = mysqli_query($mysqli, "select * from admin");
$no = 1;
while($hasil = mysqli_fetch_array($tampil)){
?>
<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $hasil['nama']; ?></td>
	<td><?php echo $hasil['tanggal']; ?></td>
	<td><?php echo $hasil['informasi']; ?></td>
	<td align="center">
	<a href="edit_admin.php?id=<?php echo $hasil['id']; ?>">Edit |</a>
	<a href="hapus_admin.php?hapus&id=<?php echo $hasil['id']; ?>"> Hapus</a>
	</td>
</tr>
<?php
}
?>
	</table>
</p>
<hr>
<br>
</body>
</html>