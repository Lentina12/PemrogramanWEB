<?php 

$nama = @$_GET['nama']; 
$usia = @$_GET['usia']; 
//tanda @ agar tidak ada peringatan error ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
/* 
pengisian variabel bisa langsung menggunakan URL/link 
diawali dengan tanda tanya (?) dan setelah itu pengisian variabel dilakukan.
*/
?>