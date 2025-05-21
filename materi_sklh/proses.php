<?php
session_start();
    if (!isset($_SESSION['saldo'])) {
        $_SESSION['saldo'] = 60000000;
    }

$uang = $_SESSION['saldo'];
$produk = $_POST['produk'];
$harga = $_POST['harga'];


if($uang < $harga){
    echo "uang tidak cukup";
}else{
    $_SESSION['saldo'] = $uang - $harga;
    echo "anda membeli " . $uang . " dengan harga " . $harga . " kembalian anda adalah " . ($uang - $harga);
    echo "<br>uang cukup";
}

echo "<br><a href='toko.php'>Kembali</a>";