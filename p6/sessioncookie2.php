<?php 
    session_start();
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
    Nilai session pada halaman ke 2 saat ini :
    <br>
    <?php
        if (isset($_SESSION['npm'])) {
            echo $_SESSION['npm'];
        } else {
            echo "kosong";
        }
    ?>
    <br>
    <a href="sessioncookie3.php">ke session cookie 3</a>
</body>
</html>