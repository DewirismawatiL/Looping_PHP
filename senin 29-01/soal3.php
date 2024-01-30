<?php
// Data berikut merupakan data apa-apa saja yang Andi beli pada suatu minimarket.
// Dari data tersebut, hitunglah total uang yang perlu Andi bayar untuk membelinya
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

$total = 0; // menampilkan total uang yang harus dibayar.
//Variabel ini berperan sebagai akumulator untuk menjumlahkan total belanjaan Andi.



echo "<ol>";
foreach ($barang as $key => $value) {
    $subtotal = $value['harga_barang'] * $value['jumlah_beli'];
    $total += $subtotal; // += dari yang awal sampe yang akhir ke bawa semuanya dan awajib mendefinisikan si nilainya ex $total =0;
    echo "<li>" . $value["nama_barang"] . " = " . $subtotal . "</li>";
}
echo "</ol>";
echo "Total yang harus dibayar: " . $total;
?>