<?php
    // This is a command to print a text to the screen
    echo "Hello masbro, ";

    /*
        This is an example of declaring a variable with data types.
        1. The name of the variable needs to begin with a letter or underline (_)
        2. The name of the variable ONLY can contain an alphabet a-z, A-Z, numeric 0-9, and underline (_)
        3. The name of the variable that has more than a single word can be separated
           using underline. For example : jenis_kelamin, gol_darah, etc...
    */
    $npm = "2125250000";
    $nama = "putra";
    $jk = "laki-laki";
    $usia = 19;
    $tinggi = 172.5;

    echo "<br/>";
    echo "Saya ".$nama."</br>";
    echo "punya npm ".$npm."</br>";
    echo "jenis kelamin saya ".$jk."</br>";
    echo "umur saya ".$usia." tahun dan punya tb ".$tinggi."</br>";

    $kode_prodi = substr($npm, 4, 2);
    $prodi = "";
    if ($kode_prodi == 24) {
        $prodi = "Sistem Informasi";
    } else if($kode_prodi == 25) {
        $prodi = "Informatika";
    } else if($kode_prodi == 27) {
        $prodi = "Teknik Elektro";
    } else if($kode_prodi == 20) {
        $prodi = "Manajemen";
    } else if($kode_prodi == 21) {
        $prodi = "Akuntansi";
    };

    echo "prodi saya itu ".$prodi;
?>