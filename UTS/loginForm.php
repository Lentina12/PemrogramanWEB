<?php
session_start();

// Deklarasi variabel koneksi database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pendaftarandebat";

// Membuat koneksi ke database
$connect = mysqli_connect($host, $user, $password, $dbname);

// Memeriksa koneksi database
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah pengguna telah mengirimkan formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari formulir pendaftaran
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jenjang = $_POST['jenjang'];
    $kategori = $_POST['kategori'];

    // Masukkan data pendaftaran ke dalam database
    $query = "INSERT INTO pendaftaran_debat (nama_lengkap, email, asal_sekolah, kelas, alamat, jenjang, kategori) VALUES ('$nama_lengkap', '$email', '$asal_sekolah', '$kelas', '$alamat', '$jenjang', '$kategori')";
    
    if (mysqli_query($connect, $query)) {
        echo "Pendaftaran berhasil. Terima kasih!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}

// Memeriksa autentikasi pengguna
if (isset($_SESSION['username'])) {
    // Jika sudah login, arahkan ke halaman pendaftaran
    header("Location: registrasiForm.html");
    exit();
} else {
    // Jika belum login, arahkan ke halaman login
    header("Location: loginForm.html");
    exit();
}

?>
