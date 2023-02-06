<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "sam" && $password == "sam"){
	$_session['username'] = username;
	header("location:admin.php");
}else{
	header("location:form_login.php");
}
?>