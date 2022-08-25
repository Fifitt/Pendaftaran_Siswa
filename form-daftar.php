<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

    <fielshet>
        <table>
        <tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="nama lengkap"></td>
			</tr>
            <tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" placeholder="kelas"></td>
			</tr>
            <tr>
				<td>Visi</td>
				<td>:</td>
				<td><input type="text" name="visi" placeholder="visi"></td>
			</tr>
            <tr>
				<td>Misi</td>
				<td>:</td>
				<td><input type="text" name="misi" placeholder="misi"></td>
			</tr>
            <tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="foto" placeholder="foto"></td>
			</tr>

</table>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
</fielshet>
    </form>

    </body>
</html>