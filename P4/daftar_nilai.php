<?php
// Data nilai siswa
$dataNilai = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90,
];

// Menghitung rata-rata nilai kelas
$rataRataKelas = array_sum($dataNilai) / count($dataNilai);

// Mencetak daftar nilai siswa yang di atas rata-rata kelas
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas ($rataRataKelas): <br>";

foreach ($dataNilai as $nama => $nilai) {
    if ($nilai > $rataRataKelas) {
        echo "Nama: $nama, Nilai: $nilai <br>";
    }
}
?>