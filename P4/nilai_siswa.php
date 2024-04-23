<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai siswa secara menaik
sort($nilaiSiswa);

// Mengabaikan dua nilai terendah dan dua nilai tertinggi
$nilaiTertinggiDihapus = array_slice($nilaiSiswa, 2, -2);

// Menghitung total nilai yang tersisa
$totalNilai = array_sum($nilaiTertinggiDihapus);

// Mencetak total nilai yang dihitung
echo "Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai";
?>