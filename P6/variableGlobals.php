<?php
// definisi variabel global x dan y dulu
$x = 75;
$y = 25;

// membuat fungsi penjumlahan
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

//memanggil fungsi penjumlahan
addition();

//mencetak hasilnya
echo $z;

?>