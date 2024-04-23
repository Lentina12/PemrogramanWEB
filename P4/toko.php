<?php
// Harga produk
$hargaProduk = 120000;

// Batas pembelian untuk mendapatkan diskon
$batasDiskon = 100000;

// Persentase diskon
$persentaseDiskon = 20; // 20%

// Menghitung harga setelah diskon
if ($hargaProduk > $batasDiskon) {
    // Jika total pembelian melebihi batas diskon, terapkan diskon
    $diskon = $hargaProduk * ($persentaseDiskon / 100); // Hitung jumlah diskon
    $hargaSetelahDiskon = $hargaProduk - $diskon; // Kurangi harga produk dengan diskon
} else {
    // Jika total pembelian tidak memenuhi syarat diskon, harga setelah diskon tetap sama dengan harga produk
    $hargaSetelahDiskon = $hargaProduk;
}

// Cetak harga yang harus dibayar setelah mendapatkan diskon
echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
?>