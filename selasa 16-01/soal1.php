<?php
$matematika = 84;
$bahasaInggris = 89;
$bahsaIndonesia = 82;

$nilai = ($matematika + $bahasaInggris + $bahsaIndonesia)/ 3;

if ($nilai  >= 85 ) {
    echo "Total Nilai Anda " .round($nilai);
    $teks = ' ANDA DI TERIMA ';
    $warna = 'green'; 
} else {
    echo "Total Nilai Anda " .round($nilai);
    $teks = ' ANDA BELUM DI TERIMA HARAP COBA LAGI ';
    $warna = 'red'; 
} echo '<span style="color:' . $warna . ';">' . $teks . '</span>';
?>

