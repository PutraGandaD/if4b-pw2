<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // if there any request method/form using POST method
        // echo $_POST['nis'];
        // echo "<br>" . $_POST['nama'];
        // echo "<br>" . $_POST['jenis_kelamin'];
        // echo "<br>" . $_POST['kota_lahir'];
        // echo "<br>" . $_POST['tgl_lahir'];
        // Photo 

        $nis =  $_POST['nis'];
        $nama =  $_POST['nama'];
        $jk =  $_POST['jenis_kelamin'];
        $kota_lahir =  $_POST['kota_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $foto =  $_FILES['foto'];

        // echo $nis . "<br>";
        // echo $nama . "<br>";
        // echo $jk . "<br>";
        // echo $tgl_lahir . "<br>";
        $ymd = date_create($tgl_lahir);
        $tanggal = date_format($ymd, 'd F Y');
        // echo $kota_lahir . "<br>";
        // //var_dump($foto) . "<br>";      

        //photo upload
        //split string 
        //example : icon-person.png => icon-person and png
        $temp = explode(".", $_FILES["foto"]["name"]);
        // end($temp) => ekstensi file png/jpg/lainnya
        $newfilename = $nis . '.' . end($temp);
        // memindahkan file dari tmp ke folder uploads
        move_uploaded_file($_FILES["foto"]["tmp_name"], "uploads/" . $newfilename);

    } else {
        echo "Please fill the required form first";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Formulir Pendaftaran</title>
</head>

<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Form Registrasi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col table-responsive">
                <table class ="table">
                    <tr>
                        <td>NIS</td>
                        <td>:
                            <?php echo $nis; ?>
                        </td>
                        <td rowspan="5">
                            <img src="uploads/<?php echo $newfilename; ?>" class="img" width="200px" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:
                            <?php echo $nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:
                            <?php echo $jk; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kota Lahir</td>
                        <td>:
                            <?php echo $kota_lahir; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:
                            <?php echo $tanggal; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

