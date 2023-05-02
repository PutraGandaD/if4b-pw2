<?php
    // memulai session
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = [
        ["username" => 2125250069, "password" => 123, "nama" => "Putra Ganda Dewata"],
        ["username" => 2125250002, "password" => 222, "nama" => "Josh"],
        ["username" => 2125250003, "password" => 333, "nama" => "Ali"],
        ["username" => 2125250004, "password" => 444, "nama" => "Claire"]
    ];

    $canLogin = false;
    foreach ($users as $data) {
        if ($data['username'] == $username && $data['password'] == $password) {
            $canLogin = true;
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama'] = $data['nama'];
            header('Location: dashboard.php');
        }
    }

    if (!$canLogin) {
        $_SESSION['error'] = 'Username atau password salah!';
        header('Location: login.php');
    }
?>
