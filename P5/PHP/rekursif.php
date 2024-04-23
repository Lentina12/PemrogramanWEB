<?php

function tampilkanAngka (int $jumlah, int $indeks = 1) { 
    echo "Perulangan ke-{$indeks} <br>";
/* 
mendefinisikan fungsi bernama tampilkanAngka dan ada dua parameter
(jumlah dan indeks dengan nilai 1)
*/
    //panggil diri sendiri selama $indeks <= $jumlah

    if ($indeks < $jumlah) { 
        tampilkanAngka($jumlah, $indeks + 1); //memanggil fungsi tampilkanAngka dan menambah nilai indeks +1 dari sebelumnya.
    }


}
tampilkanAngka(20); 
?>