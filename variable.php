<!DOCTYPE html>
<html lang="en">
<head>
    <title>coba 2</title>
</head>
<body>
    <h3>Nama : <?php echo "Alvina Maharani";?><h3> 
    <h3>Nim : <?php echo "200411100014";?><h3>
    <?php
    $num1 = 2; 
    $num2 = 3; 
    $num3 = 4; 

    $hasil1=$num1 +$num2 +$num3;  
    $hasil2=$num1 +$num2 -$num3;
    $hasil3=$num1 *$num2 /$num3;

    echo"Hasil Operasi Matematika yang Pertama adalah $hasil1 <br>"; 
    echo"Hasil Operasi Matematika yang Kedua adalah $hasil2 <br>";
    echo"Hasil Operasi Matematika yang Ketiga adalah $hasil3 <br>";
    ?>
</body>
</html>