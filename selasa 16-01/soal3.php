<?php

$belanja = 110000;
$nama = "andi";

if ($belanja > 100000) {
    $voucherPotongan = 10000;
    $totalSetelahDiskon = $belanja - $voucherPotongan;

    echo "Selamat $nama! anda mendapatkan voucher potongan sebesar $voucherPotongan\n";
    echo "Jadi total yang harus dibayar setelah diskon: $totalSetelahDiskon";
} else {
    echo "Terima kasih atas pembelian Anda. Total yang harus dibayar: $belanja";
}
?>
