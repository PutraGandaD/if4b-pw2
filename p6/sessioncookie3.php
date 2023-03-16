<?php 
    session_start();
    if(isset($_POST['submit'])) {
        session_unset();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nilai session pada halaman ke 3 saat ini :
    <br>
    <?php
        if (isset($_SESSION['npm'])) {
            echo $_SESSION['npm'];
        } else {
            echo "kosong";
        }
    ?>
    <br>
    <form action="" method="POST">
        <input type="submit" value="unset session" name="submit">
    </form>
</body>
</html>