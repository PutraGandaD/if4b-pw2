<?php
session_start();
if(isset($_POST['logout'])){
    session_unset();
    $_SESSION['sukses'] = 'Sampai berjumpa kembali :)';
    header('Location: login.php');
}
if(isset($_POST['cancel'])){
    header('Location: dashboard.php');
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

 </head>
 <body>
        <h2 class="text-center pt-5">Apakah anda yakin ingin Logout?</h2>
        <form action="" method="POST">
         <div class="col text-center">
             <button class="btn btn-primary" name="logout">Ya</button>
             <button class="btn btn-danger" name="cancel">Tidak</button>
         </div>   
        </form>
 </body>
 </html>