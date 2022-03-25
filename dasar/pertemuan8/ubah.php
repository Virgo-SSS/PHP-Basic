<?php 

require 'functions.php';

$id = $_GET["id"];
// mengambil data mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah di tekan apa belum
if( isset($_POST["submit"]) ) {
   if (ubah($_POST) > 0) {
       echo"<script>
                alert('data berhasil diUbah');
                document.location.href ='index.php';
            </script>"; // redirect ke halaman index.php menggunakan javascript
   } else {
       echo "data gagal di ubah";
   }

}
   


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>

<h1>Tambah data </h1>
<!-- make simple form for inster data -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <input type="hidden" name="oldimage" value="<?= $mhs['image']; ?>">

    <ul>
        <li>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" value="<?= $mhs['nim']; ?>">
        </li>
        <li>
            <label for="name">name</label>
            <input type="text" name="name" id="name" value="<?= $mhs['name']; ?>">
        </li>

        <li>
            <label for="jurusan">jurusan</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>">
        </li>
        <li>
            <img src="img/<?= $mhs['image'] ?>" alt="" width="100px"> <br>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </li>
    </ul>

    <!-- make submit  button-->
    <button type="submit" name="submit">klik me</button>



</form>

<a href="index.php">Kembali</a>


</body>
</html>