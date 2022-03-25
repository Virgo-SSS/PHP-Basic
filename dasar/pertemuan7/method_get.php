<?php 
// $_GET

// $_GET["nama"] = "virgo stevanus" ;
// $_GET["jurusan"] = "sistem informasi";
$mhs2 = [
    [
        "nama" => "virgo",
        "NIM" => "123123",
        "jurusan" => "sistem informasi ",
        "kota" => "batam"
    ],
    [
        "nama" => "stevanus",
        "NIM" => "10059915",
        "jurusan" => "sistem informasi ",
        "kota" => "batam"
    ],
    [
        "nama" => "kms",
        "NIM" => "asd233",
        "jurusan" => "sistem informasi ",
        "kota" => "batam"
    ]

]
// <!-- METHOD GET BIASANYA DI GUNAKAN DI HAL2 YANG BERHUBUNGAN DENGAN URL -->

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <ul>
        <?php foreach($mhs2 as $m): ?>
            <li>
                <a href="method_get2.php?nama=<?= $m["nama"]; ?>"><?php echo $m["nama"] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>