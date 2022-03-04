<?php 
//  variable scope / lingkup variable

$x  = 10;
$y = 5;
// echo $x;


function tampilx(){
    $x = 20;  // variable yang ada di function dan di luar function itu berbeda, 
    echo $x;  // yang di dalam fucntion hanya  untuk function tersebut
}


tampilx();
echo $x;

function tampily() {
    global $y; // nah agar variable di luar function dapat di gunakan, maka harus menambahkan global di depannya
    echo $y;
}

tampily();



?>