<?php 
// Lokasi Penyimpanan  
$targetDirectory = "documents/";

// Melakukan pengecekan apakah direktori penyimpanan ada atau tidak.
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    //Loop melalui semua file yang diunggah 
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Memindahkan file yang diunggah ke penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diungah.<br>";
        } else {
            echo "Gagal menggunggah file $fileName. <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah";
}
?>