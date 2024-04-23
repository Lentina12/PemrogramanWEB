<?php


$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                [
                    "nama" => "Pantai"
                ],
                [
                    "nama" => "Gunung"
                ]            
            ]         
        ],
        [
            "nama" => "Kuliner"
        ],
        [
            "nama" => "Hiburan"
        ]
    ]
        ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

/*
Pembuatan array $menu yang berisi subMenu. 
*/
function tampilkanMenuBertingkat (array $menu) { //pendefinisian fungsi tampilkanMenuBertingkat berparameter menu 
    echo "<ul>"; // unordered list
    foreach ($menu as $key => $item) { 
        echo "<li>{$item['nama']}</li>";
        if(isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}
/*
mengiterasi tiap elemen dalam array menu.
*/
tampilkanMenuBertingkat($menu); // memanggil fungsi tampilkanMenuBertingkat(dengan menyertakan array menu).
?>

