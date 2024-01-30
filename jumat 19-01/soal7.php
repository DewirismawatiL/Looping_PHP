<?php

//gabungkan dua array tersebut, 
//lalu untuk nilai yang sama maka akan diambil hanya salah satunya saja, setelah itu tampilkan 
//bilangan secara terurut dari terbesar ke terkecil. Hasil akan berisi angka-angka berikut :
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompoksama = array_intersect($bil1, $bil2);
$kelompokBeda = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));
rsort($kelompoksama);
rsort($kelompokBeda);

echo " bilangan yang sama : ";
foreach ($kelompoksama as $sama) {
    echo $sama . " ";
}
echo "<br>";

echo " bilangan yang berbeda : ";
foreach ($kelompokBeda as $beda) {
    echo $beda . " ";
}

?>