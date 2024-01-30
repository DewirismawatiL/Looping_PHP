<?php
// dani ingin membangun rumah disuatu komplek perumahan dengan panjang tanah 13 m dan lebar 9 m. teatapi sebelum membangun rumah, dani harus memberikan laporan terlebih dahulu tipe rumah yang ingin dia buat kepada kontraktor bangunan. dengan luas tanah yang dia punya, masuk kategori manakah dani anntinya
// - tipe 36 :< 90 m2
// - tipe 45 : 90 - 96
// - tipe 54: 96-120m2
// -tipe 60: 120-150m2
// -tipe 70: >150 m2 

$panj = 13;
$lebar = 9;
$luas = $panj * $lebar;

if ($luas < 90) {
    echo "termasuk kategori tipe 36";
}elseif($luas > 90 && $luas < 96){
    echo "termasuk kategori tipe 45";
}elseif($luas > 96 && $luas < 120){
    echo "termasuk kategori tipe 54";
}elseif($luas > 120 && $luas < 150){
    echo "termasuk kategori tipe 60";
}else{
    echo "termasuk kategori tipe 70";
}
?>