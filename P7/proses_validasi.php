<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Memeriksa halaman yang dipanggil menggunakan method POST atau tidak
    // Pengambilan nilai
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // Pengecekan Nama apakah sesuai syarat atau tidak
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Pengecekan email apakah sesuai syarat atau tidak
    if (empty($email)) {
        $error[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Pengecekan Password apakah sesuai syarat atau tidak
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    } else if (strlen($password) < 8) {
        $errors[] = "Minimal password memiliki minimal 8 karakter";
    }

    // Jika ada kesalahan validasi 
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirm: Nama = $nama, Email = $email";
    }
}
?>