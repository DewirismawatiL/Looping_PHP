<?php
$nilai = 75;

if ($nilai >= 75) {
    $teks = 'KOMPETEN';
    $warna = 'green'; 
} else {
    $teks = 'BELUM KOMPETEN';
    $warna = 'red'; 
} echo '<span style="color:' . $warna . ';">' . $teks . '</span>';
?>
