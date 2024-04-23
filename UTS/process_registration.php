<?php
// Mulai sesi jika belum dimulai
session_start();

// Deklarasi variabel koneksi database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pendaftarandebat";

// Membuat koneksi ke database
$connect = mysqli_connect($host, $user, $password, $dbname);

// Memeriksa koneksi ke database, jika gagal akan muncul pesan
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah user telah mengirimkan formulir pendaftaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data yang dikirimkan dari formulir pendaftaran
    $email = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jenjang = $_POST['jenjang'];
    $kategori = $_POST['kategori'];

    // Query untuk menyisipkan data pendaftaran ke dalam tabel 'pendaftaran_debat'
    $query = "INSERT INTO pendaftaran_debat (email, nama_lengkap, asal_sekolah, kelas, alamat, jenjang, kategori) 
              VALUES ('$email', '$nama_lengkap', '$asal_sekolah', '$kelas', '$alamat', '$jenjang', '$kategori')";

   // Eksekusi query
   if (mysqli_query($connect, $query)) {
    echo "Yeyy! Pendaftaran kamu terkirim!";
    
    // Set cookie setelah berhasil mendaftar
    setcookie("user_email", $email, time() + (86400 * 2), "/"); // Cookie berlaku hanya selama 2 hari
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}
?>