<!-- array -->

<?php 

$data = [123,"selasa", "rabu"];

// cara menampilkan array
// var_dump / print_r

var_dump($data);
echo "<br>";
print_r($data);
echo "<br>";

// menampilkan 1 elemen pada array
echo ($data[1]);


// menambahkan elemen array yg baru ke index terakhir
var_dump($data);
$data[] = "kamis";
echo "<br>";
var_dump($data);
?>

<!-- TETAPI INI VAR_DUMP DAN PRINT_R HANYA UNTUK DEBUG untuk developer cek di latarray2 -->