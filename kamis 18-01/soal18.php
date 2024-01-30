<!-- ternary -->

<?php
// ubah pukul 19.00 menjadi pukul 07.00 pm dan ubah pukul 23.45 menjadi pukul 11.45pm, pukul 08.55 menjadi 08.55am

$pukul = 19.00;

echo ($pukul >= 12.00) ? $pukul - 12.00 . 'pm' : $pukul . 'am';
// echo "$hasil";



?> 