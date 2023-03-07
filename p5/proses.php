<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // if there any request method/form using POST method
        echo $_POST['nis'];
        echo "<br>" . $_POST['nama'];
        echo "<br>" . $_POST['jenis_kelamin'];
        echo "<br>" . $_POST['kota_lahir'];
        echo "<br>" . $_POST['tgl_lahir'];
        // Photo 
    } else {
        echo "Please fill the required form first";
    }
?>