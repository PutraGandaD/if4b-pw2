<?php
    $nama = "Putra";
    $npm = "2125250069";
    $hobi = array("Makan", "Gaming", "Nonton");

    echo "Nama : ".$nama;
    echo "<br>NPM : ".$npm;
    echo "<br>Hobi : ".$hobi[0];

    // this is a comment
    // displayed hobi array using foreach
    echo "<ul>";
    foreach($hobi as $data) {
        echo "<li>".$data."</li>";
    }
    echo "</ul>";

    // array asosiatif
    $mahasiswa = array(
        "npm" => 2125250069, 
        "nama" => "Putra"
    );
    echo $mahasiswa['npm'];
    echo $mahasiswa['nama'];

    // array multidimensi
    $mahasiswas = [
        [
            "npm" => 2125250069,
            "nama" => "Putra",
            "jenis_kelamin" => "laki-laki"
        ]
    ];

    // display mahasiswas array using foreach
    echo "
        <table border=1>
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
        </tr>
    ";
    
    foreach($mahasiswas as $data) {
        echo "
            <tr>
                <td>".$data['npm']."</td>
                <td>".$data['nama']."</td>
                <td>".$data['jenis_kelamin']."</td>
            </tr>
        ";
    }
    echo "</table>";
?>
