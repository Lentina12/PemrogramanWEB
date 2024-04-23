<?php
// Untuk memeriksa halaman yang dipanggil apakah dengan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari buah
    $selectedBuah = $_POST['buah'];

    // Untuk memeriksa adanya nilai warna yang dipilih 
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah: ". $selectedBuah . "<br>";

    // Mencetak pesan warna yang dipilih
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: ".implode(", ", $selectedWarna ). "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    // Mencetak pesan jenis kelamin yang dipilih
    echo "Jenis kelamin Anda: ". $selectedJenisKelamin;
} 

?>