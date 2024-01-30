<?php
//Dari bilangan berikut, kelompokan nilai-nilai 
//tersebut menjadi kelompok kompeten (lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). 
//Lalu tampilkan berdasarkan kelompok tersebut.
$nilai = [80, 65, 90, 50, 78, 85, 60, 95];


foreach ($nilai as $nilai1) {
    if ($nilai1 >= 75) {
        $kompeten[] = $nilai1;
    } else {
        $belumKompeten[] = $nilai1;
    }
}

echo "Kelompok Kompeten: <ol>";
foreach ($kompeten as $nilai1) {
    echo "<li>" .  $nilai1 .   "</li>";
}
echo "</ol><br>";

echo "Kelompok Belum Kompeten: <ol> ";
foreach ($belumKompeten as $nilai1) {
    echo "<li>". $nilai1 . "</li>";
}
echo "</ol><br>";
?>