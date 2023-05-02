<?php
    require_once("Mobil.php");

    //Object
    $mobil1 = new Mobil();
    $mobil2 = new Mobil();

    //Set property
    $mobil1->warna = "Merah";
    $mobil2->warna = "Hitam";

    $mobil1->merek = "Toyota";
    $mobil2->merek = "Daihatsu";

    $mobil1->setHarga(200000000);
    $mobil2->setHarga(200000000);

    echo "Mobil 1 berwarna " . $mobil1->warna . " dengan merek " . $mobil1->merek;
    echo "<br> Mobil 2 berwarna " . $mobil2->warna . " dengan merek " . $mobil2->merek;
    echo "<br> Mobil 1 dengan merek " . $mobil1->merek . " memiliki harga " . $mobil1->getHarga();
    echo "<br> Mobil 2 dengan merek " . $mobil2->merek . " memiliki harga " . $mobil2->getHarga();
?>