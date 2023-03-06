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

    function getSyaratYudisium($ipk, $adaE = false, $nilai_ta = true, $total_d) {
        $yudisium = "";
        if ($ipk >= 2.50) {
            if($adaE == true && $nilai_ta == false && $total_d > 8 || $adaE == true && $nilai_ta == false && $total_d <= 8) {
                $yudisium = "Tidak Bisa Yudisium";
            } else if ($adaE == false && $nilai_ta == false && $total_d > 8 || $adaE == false && $nilai_ta == false && $total_d <= 8) {
                $yudisium = "Tidak Bisa Yudisium";
            } else if ($adaE == false && $nilai_ta == false && $total_d > 8 || $adaE == false && $nilai_ta == false && $total_d <= 8) {
                $yudisium = "Tidak Bisa Yudisium";
            } else if ($adaE == true && $nilai_ta == true && $total_d > 8 || $adaE == true && $nilai_ta == true && $total_d <= 8) {
                $yudisium = "Tidak Bisa Yudisium";
            } else {
                $yudisium = "Bisa Yudisium";
            }
        }
        return $yudisium;
    }

    function getNilaiTA($nilai_ta) {
        $nilaiTA = "";
        if ($nilai_ta == true) {
            $nilaiTA = "Memenuhi";
        } else {
            $nilaiTA = "Tidak Memenuhi";
        }
        return $nilaiTA;
    }
    
    function getIPKYudisium($ipk) {
        $ipkYudisium = "";
        if ($ipk >= 2.50) {
            $ipkYudisium = "Memenuhi";
        } else {
            $ipkYudisium = "Tidak Memenuhi";
        }
        return $ipkYudisium;
    }

    function getAdaE($adaE) {
        $adaNilaiE = "";
        if ($adaE == true) {
            $adaNilaiE = "Tidak Memenuhi";
        } else {
            $adaNilaiE = "Memenuhi";
        }
        return $adaNilaiE;
    }

    function getSKSNilaiD($total_d) {
        $sksD = "";
        if ($total_d > 8) {
            $sksD = "Tidak Memenuhi";
        } else {
            $sksD = "Memenuhi";
        }
        return $sksD;
    }
?>