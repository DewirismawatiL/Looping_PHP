<?php

//buatlah sebuah fungsi yang akan menghitung lembar uang rupiah
// contoh : 140500
// Le,bar rupiah:
// - Rp. 100.000: 1
// - Rp. 50.000: 1
// - Rp. 40.000: 2

// function rupiah($number){

// }

// rupiah(140500);

function rupiah($number)
{
    $nominal = [
        100000, 
        50000, 
        20000, 
        10000, 
        5000, 
        2000, 
        1000,  
        500,   
        100,   
        50,     
        25,   
    ];

    $uang = array();
    foreach ($nominal as $nominal) {
        $lembar = floor($number / $nominal);
        if ($lembar > 0) {
            $uang["Rp. " . number_format($nominal)] = $lembar;
        }
        $number %= $nominal;
    }

    echo "Lembar uang:<br>";
    foreach ($uang as $nominal => $lembar) {
        echo "- $nominal: $lembar<br>";
    }
}

rupiah(140000);

?>


