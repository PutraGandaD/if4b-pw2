<?php
    function getAM($nilai) {
        $am = [
            "A" => 4,
            "A-" => 3.7,
            "B+" => 3.3,
            "B" => 3,
            "B-" => 2.7,
            "C+" => 2.3,
            "C" => 2,
            "D" => 1,
            "E" => 0
        ];
        return $am[$nilai];
    }

    function getM($am, $k){
        return $am * $k;
    }

    function getIPK($total_m, $total_k) {
        return number_format (($total_m / $total_k), 2);
    }

    function getPredikatKelulusan($ipk, $adaD = false) {
        $predikat = "";
        if ($ipk >= 3.51) {
            if($adaD == true) {
                $predikat = "Sangat Memuaskan";
            } else {
                $predikat = "Dengan Pujian";
            }
        } else if ($ipk >= 3.01) {
            $predikat = "Sangat Memuaskan";
        } else if ($ipk >= 2.76) {
            $predikat = "Memuaskan";
        } else if ($ipk >= 2.50) {
            $predikat = "Lulus";
        } else {
            $predikat = "-";
        }
        return $predikat;
    }
?>