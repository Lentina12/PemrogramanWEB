<?php
$myArray = array(); //Array kosong
if (empty($myArray)) { //sebuah pengecekan apakah variabel bernilai kosong atau tidak
    echo "Array tidak terdefinisi atau kosong."; // menampilkan pesan ini, jika kosong
} else {
    echo "Array terdefinisi dan tidak kosong."; // menampilkan pesan ini, jika tidak kosong
}

echo "<br><br>";

// melakukan pengecekkan variabel yang kosong
if (empty($nonExixtentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>