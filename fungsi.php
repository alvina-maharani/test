<!DOCTYPE html>
<html lang="en">
<head>
    <title>coba 3</title>
</head>
<body>
    <?php
    // membuat fungsi php
    function penjumlahan($angka1, $angka2)
    {
        $a= $angka1;
        $b= $angka2;
        $hasil= $a+$b;
        return $hasil;
    
    }

    // memanggil fungsi pertama
    $hasil = penjumlahan(5,9);
    echo "Penjumlahan dari 5 +9 = $hasil"
    echo "<hr>";

    // memanggil fungsi kedua
    echo "penjumlahan dari 3 + 4 adalah ".penjumlahan(3,4);

    echo "<hr>";

    // memanggil fungsi ketiga
    echo "penjumlahan dari 8 + 2 adalah ".penjumlahan(8,2);
    
    ?>

    
</body>
</html>