<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

$insert = mysqli_query ($mysqli, "insert into pendaftaran set nama='$nama', email='$email', tgl_lahir='$tgl_lahir', alamat='$alamat'");

if($insert){
	header('location:home.php?status=sukses');
}else{
	header('location:form_daftar.php?status=gagal');
}
?>