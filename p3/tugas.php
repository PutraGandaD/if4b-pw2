<?php
    require("tugas_helper.php");
    $nilais =  [
        [
            "no" => 1,
            "nama_mk" => "Algoritm Dan Struktur Data II",
            "kode_mk" => "IF0017",
            "hm" => "B", 
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
            "hm" => "A", 
            "k" => "2",
        ],
        [
            "no" => 5,
            "nama_mk" => "Pemograman Aplikasi Bergerak I",
            "kode_mk" => "IF0018",
            "hm" => "D", 
            "k" => "3",
        ],
        [
            "no" => 6,
            "nama_mk" => "Tugas Akhir",
            "kode_mk" => "IF0055",
            "hm" => "C", 
            "k" => "4",
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

    $total_k = 0; $total_m = 0; $total_d = 0; $adaD = false; $adaE = false; $nilai_ta= false;//variable bantu
    foreach($nilais as $data) {
        if($data['hm'] == "D") {
            $adaD = true;
        }

        if($data['hm'] == "E") {
            $adaE = true;
        }

        if($data['nama_mk'] == "Tugas Akhir") {
            if($data['hm'] == "E") {
                $nilai_ta = false;
            } else if($data['hm'] == "D") {
                $nilai_ta = false;
            } else {
                $nilai_ta = true;
            }
        }

        if($data['hm'] == "D") {
            $total_d += $data['k'];
        } 
        
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
            <td colspan='2'>". getPredikatKelulusan(getIPK($total_m, $total_k), $adaD) . "</td>
        </tr>";
    
    echo "<tr>
            <td colspan='5'> Syarat Yudisium </td>
            <td colspan='2'>". getSyaratYudisium(getIPK($total_m, $total_k), $adaE, $nilai_ta, $total_d) . "</td>
    </tr>";

    echo "<tr>
            <td colspan='7'> Kriteria Syarat Yudisium </td>
    </tr>";

    echo "<tr>
            <td colspan='5'> Telah Lulus TA dengan nilai >= C </td>
            <td colspan='2'>". getNilaiTA($nilai_ta) . "</td>
    </tr>";

    echo "<tr>
            <td colspan='5'> IPK >= 2.50 </td>
            <td colspan='2'>". getIPKYudisium(getIPK($total_m, $total_k)) . "</td>
    </tr>";

    echo "<tr>
            <td colspan='5'> Tidak Ada Nilai E </td>
            <td colspan='2'>". getAdaE($adaE) . "</td>
    </tr>"; 

    echo "<tr>
            <td colspan='5'> Proporsi Nilai D <= 8 SKS </td>
            <td colspan='2'>". getSKSNilaiD($total_d) . "</td>
    </tr>"; 

//  echo "<tr>
//     <td colspan='5'> Debug total SKS Nilai D </td>
//     <td colspan='2'>". $total_d . "</td>
//  </tr>";

    echo "</table>";

    // // echo $nilais[0]['hm'];
    // $huruf = $nilais[0]['hm'];
    // echo getAM($huruf);
?>