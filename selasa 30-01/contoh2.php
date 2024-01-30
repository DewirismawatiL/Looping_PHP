<?php
//buatlah fungsi yang akan menerima data array berikut, serta anka yang dicari

$data = [80, 90, 75, 100, 85, 100, 66];

function searchNumber($AngkaYangDicari, ...$data){
    $jumlah = 0;
    foreach ($data as $value) {
        if ($value == $AngkaYangDicari){
            $jumlah += 1;
        }
    }
    return $jumlah;
}

$AngkaYangDicari = 100;
echo "jumlah angka $AngkaYangDicari = ". searchNumber($AngkaYangDicari, 100, 20, 40, 80, 100);
