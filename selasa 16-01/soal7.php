<?php

$totalPembelian = 130000;
$hari = date("D");
$diskonSelasa = 0.05;
$diskon100 = 0.07;
$diskonseluruh = 0.12;


if($totalPembelian >= 100000){

    if($hari === "Tue"){
        $bayar = $totalPembelian - ($totalPembelian * $diskonseluruh);
    } else {
        $bayar = $totalPembelian - ($totalPembelian * $diskon100);
    }
    
    
    echo "Total Pembelian: Rp " .number_format($totalPembelian,2,".","."),   " total pembayaran Rp " . number_format($bayar,0,".",".");
} else{
    echo "Uang yang harus dibayar Rp : " .number_format($totalPembelian,2,".","."), " Anda tidak mendapatkan diskon ";
}
?>

<!-- menambahkan 0 dibelakang -->