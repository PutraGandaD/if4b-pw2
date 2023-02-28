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
?>