<?php 

require 'functions.php';

// cek apakah tombol submit sudah di tekan apa belum
if( isset($_POST["submit"]) ) {
   if (tambah($_POST) > 0) {
       echo "data berhasil di tambahkan";
   } else {
       echo "data gagal di tambahkan";
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
<form action="" method="post">
    <ul>
        <li>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim">
        </li>
        <li>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
        </li>

        <li>
            <label for="jurusan">jurusan</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
    </ul>

    <!-- make submit  button-->
    <button type="submit" name="submit">klik me</button>



</form>

<a href="index.php">Kembali</a>


</body>
</html>