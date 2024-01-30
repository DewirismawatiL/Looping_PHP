<?php
// setiap orang memiliki IMT dengan kategorinya masing masing 
// berikut kategori IMt 
// - kurang dari 18.5 : berat badan kurang
// - dari 18.5 sampai kurang dari 22.9: normal
// - dari 22.9 sampai kurang dari 24.9 : berat badan lebih
// - lebih dari dan sama dengan 22: obesitas
// jika beni memiliki berat badan 44 kg dengan tinggi badan 148 cm, termasuk kedalam kategori apa


$badan = 44;
$tb = 148;
$tinggi = $tb / 100;
$IMT = $badan / ($tinggi^2);

if($IMT < 18.5 && $IMT < 22.9){
    echo"IMT yang di dapatkan $IMT, hasilnya Berat Badan Kuran Normal ";

}elseif($IMT >= 18.5 && $IMT < 22.9){
        echo"IMT yang di dapatkan $IMT, hasilnya Berat Badan Berat Normal ";

 }elseif(22.9 && $IMT >= 24.9  ){
        echo "IMT yang di dapatkan $IMT, hasilnya Berat Badan Berat Lebih";
} else{
echo "IMT yang di dapatkan $IMT, hasilnya Berat Badan Obesitas";
}

?>