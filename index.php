<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Voting SMKN 1 SAYUNG</title>
	<style>
     body {
		background: url("sampul1.jpg");
		background-size:100%;
	 }
		</style>
</head>
    <link rel="stylesheet" href="style.css"/>

<body>
	<center>
		<img src="logosmk.png" alt="Logo SMKN 1 Sayung">
		<div class="login">
    <br>
	<h2>APLIKASI VOTING SMKN 1 SAYUNG</h2>
	
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</center>
</body>
</html>





