<?php
// Skor pemain
$skorPemain = 700;

// Total skor pemain
$totalSkorPemain = "Total skor pemain adalah: $skorPemain";

// Apakah pemain mendapatkan hadiah tambahan?
$hadiahTambahan = ($skorPemain > 500) ? "YA" : "TIDAK";

// Cetak total skor pemain dan apakah pemain mendapatkan hadiah tambahan menggunakan operator ternary
echo $totalSkorPemain . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
?>