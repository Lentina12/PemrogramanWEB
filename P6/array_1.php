<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    // ini jika tidak menggunakan perulangan
    echo $Listdosen[2] . "<br>"; //menampilkan isi yang berada di indeks 2
    echo $Listdosen[1] . "<br>"; //menampilkan isi yang berada di indeks 1
    echo $Listdosen[0] . "<br>"; //menampilkan isi yang berada di indeks 0
    
   foreach ($Listdosen as $dosen) {
    echo $dosen . "<br>";
   }; // menggunakan perulangan for each
    ?>
</body>
</html>