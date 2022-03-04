<?php 

// $mahas = [
//     ["virgo", "123123", "sistem informasi ", "batam"],
//     ["stevanus", "090888", "sistem informasi ", "batam"],
//     ["kms", "090888", "sistem informasi ", "batam"]
// ],

// Array assosiatve
// adalah array yg key dan value nya kita bikin sendiri, jadi bukan ngikutin index
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aassosiative array</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

<?php foreach($mhs2 as $m) : ?>
    <ul>
        <li><?php echo $m["nama"] ?></li>
        <li><?php echo $m["NIM"] ?></li>
        <li><?php echo $m["jurusan"] ?></li>
        <li><?php echo $m["kota"] ?></li>
    </ul>
<?php endforeach ?>


</body>
</html>