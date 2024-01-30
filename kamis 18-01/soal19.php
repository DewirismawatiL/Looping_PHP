<!-- ternary -->

<?php
// jika hari ini adalah hari senin maka hari ini upacara jika hari ini bukan hari senin maka hari ini tidak upacara

$hari = date("M");

$hasil = ($hari == "Monday") ? 'hari ini upacara' : 'hari ini tidak upacara';
echo "$hasil";
?>