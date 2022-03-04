<?php 

// pengulangan pada array 
// for dan foreach


$angka = [1,2,3,4,5,6,7];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        div{
            background-color: blue;
            float: left;
            margin: 3px;
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body> <!--- count untuk menghitung berapa banyak data yg ada di variable angka-->
    
    <?php for ($i = 0; $i < count($angka); $i++){ ?>
    <div><?php echo $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div><?php echo $a ?></div>
    <?php endforeach ?>



</body>
</html>