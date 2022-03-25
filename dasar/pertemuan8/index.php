<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// jika tombol cari di klik
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<form action="" method="post">
    <input type="text" name="keyword" placeholder="Search">
    <button type="submit" name="cari">Cari</button>
</form>

<br>
<table border="1" cellpadding="10" cellspacing = "0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Logo</th>
    </tr>

    <!-- menampikan data mahasiswa -->
    
    <?php $i = 1 ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $mhs["id"]; ?>">Edit</a> | <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="
            return confirm('apakah anda yakin ?');">Delete</a>
        </td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["name"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
        <td><img src="img/<?= $mhs['image']; ?>" alt="" width="100px"></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    
    <a href="tambah.php">Tambah data s asd</a>
    <br>
    
</table>



</body>
</html>