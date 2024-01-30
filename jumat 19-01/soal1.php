<?php

// tampilkan angka-angka yang bisa dibagi dengan 4 dan 5 pada retang 1-50

for ($i=1; $i <= 50; $i++) { 
    if (($i % 5 == 0) && ($i % 4 == 0)) {
        echo "angka yang bisa di bagi dengan 4 dan 5 adalah $i". "<br>";
    }
}