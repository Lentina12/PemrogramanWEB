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


// Pembuatan array $menu yang berisi subMenu. 

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

tampilkanMenuBertingkat($menu); // memanggil fungsi tampilkanMenuBertingkat.
?>