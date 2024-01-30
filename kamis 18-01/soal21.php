<!-- ternary -->

<?php
// persentase kehadiran setiap siswa dalam satu bulan adalah 100%
// sakit dan izin berkurang 3%, alfa berkurang 5%, hadir ga berkurang


$sakitatauizin = 0; 
$alfa = 0;

$presentasi = $sakitatauizin == 1
    ? "Kehadiran : " . 100 - 3 . "%"
    : ($alfa == 1
        ? "Kehadiran : " . 100 - 5 . "%"
        : 'Kehadiran 100%');

echo $presentasi;
