<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Pembagian: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br><br>";

$hasilSama = (int)($a == $b);
$hasilTidakSama = (int)($a != $b);
$hasilLebihKecil = (int)($a < $b);
$hasilLebihBesar = (int)($a > $b);
$hasilLebihKecilSama = (int)($a <= $b);
$hasilLebihBesarSama = (int)($a >= $b);

echo "Hasil Pengecekan Kesamaan: $hasilSama <br>";
echo "Hasil Pengecekan Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Pengecekan Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Pengecekan Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Pengecekan Lebih Kecil atau Sama: $hasilLebihKecilSama <br>";
echo "Hasil Pengecekan Lebih Besar atau Sama: $hasilLebihBesarSama <br><br>";

$hasilAnd = (int)($a && $b);
$hasilOr = (int)($a || $b);
$hasilNotA = (int)(!$a);
$hasilNotB = (int)(!$b);

echo "Hasil Logika AND: $hasilAnd <br>";
echo "Hasil Logika OR: $hasilOr <br>";
echo "Hasil Logika NOT untuk A: $hasilNotA <br>";
echo "Hasil Logika NOT untuk B: $hasilNotB <br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br> Hasil Penambahan: " . ($a += $b) . "<br>";
echo "Hasil Pengurangan: " . ($a -= $b) . "<br>";
echo "Hasil Perkalian: " . ($a *= $b) . "<br>";
echo "Hasil Pembagian: " . ($a /= $b) . "<br>";
echo "Sisa Pembagian: " . ($a %= $b) . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br> Hasil Pengecekan Identik: " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Hasil Pengecekan Tidak Identik: " . ($hasilTidakIdentik ? "true" : "false") . "<br>";

?>