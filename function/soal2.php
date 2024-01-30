<?php
//buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format "K" untuk ribuan
//dan "M" untuk jutaan. misal 9500 menjadi 9,5k atau 1.700.000 menjadi 1,7 m
 


function formatNumber($number) {
    if ($number < 1000) {
        echo $number;
    } elseif ($number < 1000000) { //kalo semisalnya lebih dari jadi tinggal di tukar saja
        echo $number / 1000 . 'K';
    } else {
        echo $number / 1000000 . 'M';
    }
}

formatNumber(9500);
echo "<br>";
formatNumber(1700000);

?>  
