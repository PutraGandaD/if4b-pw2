<?php
    $nilais =  [
        [
            "no" => 1,
            "nama_mk" => "Algoritm Dan Struktur Data II",
            "kode_mk" => "IF0017",
            "hm" => "A-", 
            "am" => "3.70",
            "k" => "3",
            "m" => "6.9"
        ],
        [
            "no" => 2,
            "nama_mk" => "Jaringan Komputer",
            "kode_mk" => "IF0029",
            "hm" => "A", 
            "am" => "4.00",
            "k" => "3",
            "m" => "12"
        ],
        [
            "no" => 3,
            "nama_mk" => "Kalkulus II",
            "kode_mk" => "I1212",
            "hm" => "B-", 
            "am" => "2.70",
            "k" => "4",
            "m" => "10.8"
        ],
        [
            "no" => 4,
            "nama_mk" => "Logika Informatika",
            "kode_mk" => "I1108",
            "hm" => "A", 
            "am" => "4.00",
            "k" => "2",
            "m" => "8"
        ],
        [
            "no" => 5,
            "nama_mk" => "Pemograman Aplikasi Bergerak I",
            "kode_mk" => "IF0018",
            "hm" => "A", 
            "am" => "4.00",
            "k" => "3",
            "m" => "12"
        ]
    ];

    echo "
        <table border = 1>
        <tr>
            <th rowspan = 2>No.</th>
            <th rowspan = 2>Mata Kuliah</th>
            <th rowspan = 2>Kode Mata Kuliah</th>
            <th colspan = 4>Prestasi</th>
        </tr>
        <tr>
            <td>HM</td>
            <td>AM</td>
            <td>K</td>
            <td>M</td>
        </tr>
    ";

    foreach($nilais as $data) {
        echo "
            <tr>
                <td>".$data['no']."</td>
                <td>".$data['nama_mk']."</td>
                <td>".$data['kode_mk']."</td>
                <td>".$data['hm']."</td>
                <td>".$data['am']."</td>
                <td>".$data['k']."</td>
                <td>".$data['m']."</td>
            </tr>
        ";
    }
    echo "</table>";
?>