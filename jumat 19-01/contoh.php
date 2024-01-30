<?php
//array

// rsort-> mengurutkan nilai dari yang terbesar ke terkecil
// sort-> mengurutkan nilai dari yang terkecil ke terbesar
// array unique : menghapus nilai yg duplikat
// array merge : menggabungkan array
// array sum : menjumlahkan
// count : menghitung jumlah isi item

$array = array(1, 2, 3);

var_dump($array);
echo "<br>";

print_r($array);
echo "<br>";


//kalo mau munculin pake echo harus pake looping
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}
echo "<br>";

foreach ($array as $key => $value) { //key itu index ke berapanya, kalo value itu isinya 
    echo "index ke- $key = ". $value . "<br>";
}
echo "<br>";

// dari array tersebut hitunglah jumlah rata-rata dari nilai tiap-tiap siswa. lalu tampilkan seperti berikut
// 1. Andi : 81.2
$student = [
    [
        'nama' => 'Andi',
        'nilai'=> [80,78,82,78,88],
    ],
    [
        'nama' => 'Benii',
        'nilai'=> [86,70,80,85,81],
    ],
    [
        'nama' => 'Dani',
        'nilai'=> [83,91,70,73,81],
    ],
    [
        'nama' => 'Eko',
        'nilai'=> [89,85,84,86,88],
    ],
];
echo "<ol>";
foreach ($student as $key=> $value) {
    echo "<li>". $value["nama"]. "=". (array_sum($value['nilai'])/ count($value['nilai'])). "</li>";

}
echo "</ol>";

echo "<br>";
//menghitung rata rata dan memunculkan nama

$student = [
    [
        "nama"=> "andi",
        "nilai" => [100, 100, 80, 90, 80],
    ],
    [
        "nama"=> "yudi",
        "nilai" => [80, 90, 80, 70, 80],
    ],
    [
        "nama"=> "budi",
        "nilai" => [60, 60, 50, 70, 80],
    ],
];

echo "<ol>";
foreach ($student as $key=>$value){
        echo "<li>".$value['nama'] . " = ".(array_sum($value['nilai']) / (count($value['nilai']))) . "</li>";
}

echo "</ol>";