<?php
// Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten (lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). Lalu tampilkan berdasarkan kelompok tersebut.
// $bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$nilai = [75, 77, 87, 70, 90, 81, 69, 87, 66];
$kompeten = [];
$belumKompeten = [];

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