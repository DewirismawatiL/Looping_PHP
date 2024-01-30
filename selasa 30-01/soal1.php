<?php

//buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data yang diterima.
//Data yang dikirim berbentuk string nama-nama jurusan. Jika nama jurusan ada yang di duplikat, maka
//yang dimasukan ke array hanya salah satunya saja (capslock).
//contoh pemanggilan argumentnya : namafunc("PPLG", "HTL", "KLN", "PMN", "pplg"). maka akan menghasilkan array
// ["PPLG", "HTL", "KLN", "PMN"]

function createArray(...$jurusan){
    $uniqueJurusan = array_unique(array_map('strtoupper', $jurusan));
    return $uniqueJurusan;
}

print_r( createArray("PPLG", "HTL", "KLN", "PMN", "pplg"));
