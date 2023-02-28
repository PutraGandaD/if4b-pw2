<?php
    function salam() {
        echo("Belajar function");    
    }

    function getProdi($kode_prodi) {        
        $prodi = [
            11 => "manajemen Informatika",
            20 => "manajemen",
            21 => "akuntansi",
            24 => "sistem informasi",
            25 => "Informatika",
            27 => "teknik elektro"
        ];
        return $prodi[$kode_prodi];
    }

    function getProdiByNPM($npm) {
        return getProdi(substr($npm, 4, 2));
    }
?>
