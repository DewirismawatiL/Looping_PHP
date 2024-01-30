<!-- ternary -->

<?php
//predikat terhadap hasil ujian diberikan ketika
// - mendapatkan predikat A jika nilai lebih dari 90
// - mendapatkan predikat B jika nilai lebih dari 75
// - mendapatkan predikat C jika nilai lebih dari 60
// - selain itu mendapatkan nilai D



$nilai = 99;

echo ($nilai >= 90) ? 'Predikat A' : 
            (($nilai >= 75 && $nilai < 90) ? 'Predikat B' : 'Predikat C');

?>