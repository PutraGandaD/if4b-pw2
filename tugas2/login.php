<?php
    // memulai session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                        
                        <?php 
                        if (isset ($_SESSION['error'])){
                            echo "<h5 class='text-danger fw-bold card-title text-center mb-5 fw-light fs-5'> 
                            ".$_SESSION['error']."</h5>";
                            unset($_SESSION['sukses']);
                        }
                        if (isset ($_SESSION['sukses'])){
                            echo "<h5 class='text-success fw-bold card-title text-center mb-5 fw-light fs-5'> 
                            ".$_SESSION['sukses']."</h5>";
                            unset($_SESSION['sukses']);
                        }
                        ?>
                        <form action="proses.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Masuk
                                </button>
                            </div>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>