<?php include("config.php") ; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

<nav> 
    <a href ="form-daftar.php">[+] Tambah Baru</a>
</nav>
<nav>
    <a href ="home.php">Home</a>
</nav>

<br>

<table border="1" >
<thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Foto</th>
            <th>Tindakan</th>
        </tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM kandidat1";
$query = mysqli_query($db, $sql);
$marom = 1;
while($siswa = mysqli_fetch_array($query)){
    echo "<tr>";

    echo "<td>".$marom."</td>";
    echo "<td>".$siswa['nama']."</td>";
    echo "<td>".$siswa['kelas']."</td>";
    echo "<td>".$siswa['visi']."</td>";
    echo "<td>".$siswa['misi']."</td>";
    echo "<td>".$siswa['foto']."</td>";

    echo "<td>";
    echo "<a href='form-edit.php?id=".$siswa['id']."'>edit</a> | ";
    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
    echo "</td>";
    
    echo "</tr>";
    $marom++;
}
?>
</tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>

            
            


            

            

            

            

