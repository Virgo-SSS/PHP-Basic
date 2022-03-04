<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<H1>Detail Mahasiswa</H1>
<ul>     
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["NIM"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["kota"]; ?></li>
    
</ul>
<p><a href="method_get.php">Kembali</a></p>




</body>
</html>

<!-- METHOD GET BIASANYA DI GUNAKAN DI HAL2 YANG BERHUBUNGAN DENGAN URL -->