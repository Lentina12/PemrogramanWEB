<?php
$biodata=[
    'Lentina'=>[
        [' ', '<img src="Aku.jpg" width="150" height="200">'],
        ['Nama      :', 'Lentina Abrila Putri'],
        ['Alamat    :', 'Jl. Ahmad Yani, Malang'],
        ['No. Tlp   :', '081517946770'],
        ['Jurusan   :', 'Teknologi Informasi'],
    ],
    'Maty'=>[
        [' ', '<img src="MattyBraps.jpg"  width="150" height="200">'],
        ['Nama      :', 'Matty Braps'],
        ['Alamat    :', 'Jl. Salak, Malang'],
        ['No. Tlp   :', '0819688222'],
        ['Jurusan   :', 'Teknik Kimia'],
    ]
];
// pada kode diatas data biodata orang diisi dalam array 2 dimensi

foreach ($biodata as $nama => $data) {
    echo "<table>";
    foreach ($data as $baris) {
        echo "<tr>";
        foreach ($baris as $isi) {
            echo "<td>$isi</td>";
        }
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
}
// kode diatas untuk membuat tabel agar output menjadi lebih rapi
?>