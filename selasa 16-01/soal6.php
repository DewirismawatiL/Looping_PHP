<?php
//Di suatu rumah produksi memiliki jam kerja 8 jam. jika pegawai bekerja melebihi jam kerja berhak mendapatkan
//kompensasi berupa Rp. 50.000 di satu jam pertama dan Rp. 25.000 di jam berikutnya 

//jika Dani bekerja dari pukul 8 pagi Lalu pulang jam 10 malam, berapakah kompensasi nya

//dik
$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

//dit
$jamMulai = 8;
$jamSelesai = 22;

//jawab
$jumlahJam = $jamSelesai - $jamMulai;

if($jumlahJam > $jamNormal){

    $jumlahJamKompensasi = $jumlahJam - $jamNormal;
    if($jumlahJamKompensasi == 1){
        $kompensasi = $kompensasiSatu;
    } else {
        $kompensasi = (($jumlahJamKompensasi - 1) * $kompensasiDua) + $kompensasiSatu;
    }

    echo "Jumlah Kompensasi : " . number_format($kompensasi,0,".",".");
} else{
    echo "tidak dapat kompensasi";
}

//kalo echo nya di if masing masing maka variable kompensasi nya boleh tidak sama
//kao echonya di luar if maka wajib sama si variablenya
