<?php
    class Mobil {
        //property
        public $warna;

        public $merek;

        private $harga;

        function maju() {
            return "Mobil bergerak maju!";
        }

        function setHarga($val) {
            $this->harga = $val;
        }

        function getHarga() {
            return $this->harga;
        }
    }
?>