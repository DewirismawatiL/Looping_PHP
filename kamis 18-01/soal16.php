<?php

// menu di rumah makan beni 
// - nasi goreng : 15000
// - ayam bakar : 20000
// - nasi kebuli : 25000
// - aneka jus : 8000
// - esteh manis: 3000
// - es jeruk: 5000
// Rumah makan beni mengadakan program jumat berkah dengan memberikan diskon sebesar 5% dihari jumat dan 2% dihari senin. hitunglah harga yang harus dibayar jika dani ingin membeli 2 nasi kebuli, 1 ayam bakar, 2 nasi goreng (gunakan hari secara otomatis)

$dis1 = 0.05;
$dis2 = 0.02;
$hari = date("D");

$nasbul = 25000;
$ayamBakar = 20000;
$nasgor = 15000;
$jumlahBeli = $nasbul + $ayamBakar + $nasbul;

if ($hari == "Friday") {
    $totDis1= ($jumlahBeli * $dis2) ;
    $harga1 = $jumlahBeli - $totDis;

    echo "total yang hasus d bayar adalah $harga1, dan mendapatkan diskon 2%";
}elseif($hari == "Monday"){
    $totDis2= $jumlahBeli * $dis1 ;
    $harga2 = $jumlahBeli - $totDis;

    echo "total yang hasus d bayar adalah $harga2, dan mendapatkan diskon 5%";
}else {
    echo "total yang hasus d bayar adalah $jumlahBeli, dan tidak mendapatkan diskon";
}

?>