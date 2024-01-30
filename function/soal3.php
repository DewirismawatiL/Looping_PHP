<?php
//buatlah sebuah fungsi yang akan membandingkan dua buahs string nama. lalu, menampilkan nama yang dimiliki
//jumlah karakter dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak
//serta selisihnya

function pembandinganNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    echo "$nama1 Mempunyai jumlah karakter: ($panjangNama1) ";
    echo "$nama2 Mempunyai jumlah karakter: ($panjangNama2) <br>";

    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki lebih banyak karakter ($selisih karakter lebih banyak).";
    } elseif ($panjangNama2 > $panjangNama1) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama2 memiliki lebih banyak karakter ($selisih karakter lebih banyak).";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.";
    }
}

pembandinganNama("Dewi Rismawati", "Kayla ayestha bachrie");

?>

