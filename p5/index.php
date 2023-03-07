<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class = "container">
        <div class="row">
            <div class="col">
                <h2 class="mb-3">Form Registrasi</h2>
                <form action = "proses.php" method = "post" enctype="multipart/form-data">
                    <!-- NIS -->
                    <div class="form-group mb-3">
                        <label>NIS</label>
                        <input type = "number" class = "form-control" name="nis">
                    </div>

                    <!-- Nama -->
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type = "text" class = "form-control" name="nama">
                    </div>

                    <!-- Jenis Kelamin-->
                    Jenis Kelamin
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_laki" value="L" checked>
                        <label class="form-check-label" for="jk_laki">
                        Laki-laki
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_perempuan" value="P">
                        <label class="form-check-label" for="jk_perempuan">
                        Perempuan
                        </label>
                    </div>

                    <!-- Kota Lahir-->
                    <label>Kota Lahir</label>
                    <select class="form-select mb-3" name = "kota_lahir">
                        <option selected>Pilih Kota Lahir</option>
                        <option value="PLM">Palembang</option>
                        <option value="JKT">Jakarta</option>
                        <option value="BTH">Batam</option>
                    </select>

                    <!-- Tanggal Lahir-->
                    <div class="form-group mb-3">
                        <label>Tanggal Lahir</label>
                        <input type = "date" class = "form-control" name="tgl_lahir">
                    </div>

                    <!-- Foto-->
                    <div class="form-group mb-3">
                        <label>Foto</label>
                        <input type = "file" class = "form-control" name="foto" accept="image/png, image/jpeg, image/jpg">
                    </div>

                    <!-- Submit Button-->
                    <Button type = "submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>  
        </div>
    </div>    
</body>
</html>