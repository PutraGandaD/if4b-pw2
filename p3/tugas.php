<?php
    require("tugas_helper.php");
    $nilais =  [
        [
            "no" => 1,
            "nama_mk" => "Algoritm Dan Struktur Data II",
            "kode_mk" => "IF0017",
            "hm" => "A", 
            "k" => "3",
        ],
        [
            "no" => 2,
            "nama_mk" => "Jaringan Komputer",
            "kode_mk" => "IF0029",
            "hm" => "A", 
            "k" => "3",
        ],
        [
            "no" => 3,
            "nama_mk" => "Kalkulus II",
            "kode_mk" => "I1212",
            "hm" => "A", 
            "k" => "4",
        ],
        [
            "no" => 4,
            "nama_mk" => "Logika Informatika",
            "kode_mk" => "I1108",
            "hm" => "D", 
            "k" => "2",
        ],
        [
            "no" => 5,
            "nama_mk" => "Pemograman Aplikasi Bergerak I",
            "kode_mk" => "IF0018",
            "hm" => "A", 
            "k" => "3",
        ]
    ];

    echo "
        <style>
            td {
                text-align: center;
            }
        </style>
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

    $total_k = 0; $total_m = 0; //variable bantu
    foreach($nilais as $data) {
        $total_k += $data['k']; // $total_k = $total_k + $data['k']
        $total_m += getM(getAM($data['hm']), $data['k']);
        echo "
            <tr>
                <td>".$data['no']."</td>
                <td>".$data['nama_mk']."</td>
                <td>".$data['kode_mk']."</td>
                <td>".$data['hm']."</td>
                <td>".getAM($data['hm'])."</td>
                <td>".$data['k']."</td>
                <td>".getM(getAM($data['hm']), $data['k'])."</td>
            </tr>
        ";
    }
    echo "<tr> 
            <td colspan='5'> JUMLAH </td> 
            <td>" . $total_k . "</td> 
            <td>" . $total_m . "</td> 
          </tr>";
    echo "<tr> 
            <td colspan='5'> IPK </td>
            <td colspan='2'>" . getIPK($total_m, $total_k) . "</td>
         </tr>";
    echo "<tr>
            <td colspan='5'> Predikat Kelulusan </td>
            <td colspan='2'>". getPredikatKelulusan(getIPK($total_m, $total_k), $nilais) . "</td>
        </tr>";

    echo "</table>";

    // // echo $nilais[0]['hm'];
    // $huruf = $nilais[0]['hm'];
    // echo getAM($huruf);
?>