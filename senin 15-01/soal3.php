<?php
$tahun = 2008;
$tahun_sekarang = date("Y");
$usia = $tahun_sekarang - $tahun;

if ($usia >= 17) {
    echo "Tahun kelahiran $tahun sudah dapat memiliki ktp. Usia sekarang = $usia";
} else {
    echo "Tahun kelahiran $tahun belum dapat memiliki ktp = $usia";
}
?>
