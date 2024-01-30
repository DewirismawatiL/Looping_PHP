<?php
// Dari data berikut, tampilkan nama dan dari data tahun tersebut tentukan apakah nama tersebut lahir ditahun kabisat atau bukan. Contoh :
// 1. Andi : lahir pada tahun kabisat (2008)
// 2. Beni : lahir bukan pada tahun kabisat (2001)

$data = [
[
    'nama' => 'Andi',
    'tahun' => 2008,
],
[
    'nama' => 'Beni',
    'tahun' => 2001,
],
[
    'nama' => 'Dani',
    'tahun' => 2004,
],
[
    'nama' => 'Eko',
    'tahun' => 2006,
]
];
echo "<ol>";
    foreach ($data as $value) {
        if ($value ['tahun'] % 4 == 0) {
            echo "<li>". $value['nama']. " = lahir pada tahun kabisat"."</li>";
        }else{
            echo "<li>". $value['nama']. " = lahir bukan  pada tahun kabisat"."</li>";

        }
    }
echo "</ol>";
