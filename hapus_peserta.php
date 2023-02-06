<?php
// Tombol hapus ditekan
include "koneksi.php";
if(isset($_GET['hapus'])){
	$id = $_GET['id'];
	$hapus = mysqli_query($mysqli, "DELETE FROM pendaftaran WHERE id='$id'");
	if($hapus){
		header("location:daftar_peserta.php");
	}else{
		echo "<script>alert('maaf, data tersebut masih terhubung dengan data yg lain');</script>";
	}
}
?>
