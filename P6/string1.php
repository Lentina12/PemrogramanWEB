<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectur adipisicing elit.
Voluptatem reprehendrit nobis veritatis commodi fugiat molestias 
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum 
quisquam? Quos impedit eum nulla optio."; 

echo "<p>{$loremIpsum}</p>"; //menampilkan isi dari variabel loremIpsum
echo "Panjang karakter: " . strlen($loremIpsum). "<br>"; //menampilkan panjang karakter 
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>"; // menampilkan jumlah kata 
echo "<p>" . strtoupper($loremIpsum). "</p>"; //mencetak teks loremIpsum dan menjadikannya huruf kapital
echo "<p>" . strtolower($loremIpsum). "</p>"; //mencetak teks loremIpsum dan menjadikannya huruf kecil

?>