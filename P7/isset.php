<?php
$umur;

// pengecekan variabel $umur (ada atau tidak) dan memiliki nilai sesuai syarat atau tidak
if (isset($umur) && $umur >= 18) { // jika umur ada nilainya dan lebih dari sama dengan 18 
    echo "Anda sudah dewasa."; 
} else { 
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}
echo"<br> <br>";

// Pengecekan array $data dengan nama apakah terdapat sebuah nilai atau kosong.
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>