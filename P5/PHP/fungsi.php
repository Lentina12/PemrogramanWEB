<?php

//membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir; 
    return $umur; 
}

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    //pencetakan yang ditengahnya terdapat variabel nama
    echo "Perkenalkan, nama saya ".$nama."<br/>"; 
    
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>"; //memanggil fungsi dan memasukkan nilainya yaitu tahun lahir dan tahun sekarang.
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan("Lentina");
?>