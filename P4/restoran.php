<?php
// Jumlah total kursi di restoran
$totalKursi = 45;

// Jumlah kursi yang telah ditempati oleh pelanggan
$kursiDitempati = 28;

// Menghitung jumlah kursi yang masih kosong
$kursiKosong = $totalKursi - $kursiDitempati;

// Menghitung persentase kursi yang masih kosong
$persenKursiKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan hasil
echo "Jumlah kursi kosong: $kursiKosong dari $totalKursi kursi<br>";
echo "Persentase kursi kosong: $persenKursiKosong%";
?>
