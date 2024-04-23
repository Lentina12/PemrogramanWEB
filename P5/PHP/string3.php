<?php

$pesan = "Saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode 
$pesanPerKata = explode(" ", $pesan); 
// explode untuk memisahkan string menjadi array. 

#ubah setiap kata dalam array menjadi kebalikannya 
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
 

#gabungkan kembali array menjadi string (penjelasan dari js)
$pesan = implode(" ", $pesanPerKata);
//implode untuk menggabungkan elemn array jadi satu string.


echo $pesan . "<br>";



?>