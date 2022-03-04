<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: blue;
            text-align: center;
            float: left;

        }
    </style>
</head>
<body>

<?php 
$data= [[1,2,3],[4,5,6],[7,8,9]];
?>

<?php foreach ( $data as $dt ) : ?>
    <?php foreach ( $dt as $ta  ) : ?>
        <div class="kotak"><?php echo $ta ?></div>
    <?php endforeach ?>
<?php endforeach ?>

</body>
</html>