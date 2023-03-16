<?php
    //memulai session
    session_start();

    // ambil $_POST['npm'] set sebagai session variable
    if(isset($_POST['npm'])) {
        $_SESSION['npm'] = $_POST['npm'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SESSION['npm']) {
            echo "Nilai session saat ini : ".$_SESSION['npm'];
        }
    ?>
    <form action="" method="POST">
        NPM : <input type="text" name="npm">
        <input type="submit" value="submit">
    </form>
    <a href="sessioncookie2.php">ke session cookie 2</a>
</body>
</html>