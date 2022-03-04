<?php 

$mhs = [
    ["virgo", "123123", "sistem informasi ", "batam"],
    ["stevanus", "090888", "sistem informasi ", "batam"],
    ["kms", "090888", "sistem informasi ", "batam"],
]



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
<?php foreach($mhs as $m) : ?>
<ul>
    <li>nama :<?php echo $m[0] ?></li>
    <li>nim: <?php echo $m[1] ?></li>
    <li> jurusan :<?php echo $m[2] ?></li>
    <li> kota : <?php echo $m[3] ?></li>
</ul>    
<?php endforeach ?>
</body>
</html>