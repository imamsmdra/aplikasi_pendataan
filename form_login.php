<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style align="center">	
	fieldset	{
			border: 2px solid #DDDDDD;
			display: inline-block;
			font-size: 14px;
			font-family: Arial, Helveica;
			padding: 5em 7em;
			margin: 100px auto;
		}
	</style>
	<style>
		body{
			background: rgb(34, 193, 195);
			background: linear-gradient(90deg, rgba(34, 193, 195, 1) 0%, rgba(240, 45, 253,1) 100%);
		}
	</style>
</head>
<body align="center">
	<h1>Selamat Datang</h1>
	<hr>
	<form method="Post" action="proses_login.php">
	<fieldset disabled>
		<legend><h3><strong>LOGIN</strong></h3></legend>
		<table>
			<tr>
				<td><label>Username :</label></td>
				<td><input type="text" name="username" placeholder="Masukkan Username..."></td>
			</tr>
			<tr>
				<td><label>Password :</label></td>
				<td><input type="password" name="password" placeholder="Masukkan Password..."></td>
			</tr>
			<tr>
				<td><label><input type="submit" name="submit" value="Login"></label></td>
			</tr>
		</table>
	
</fieldset>
</form>
</body>
</html>