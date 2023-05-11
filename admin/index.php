<?php

session_start();

// Cek apakah user sudah login atau belum
// if (!isset($_SESSION['username'])) {
//     // Jika belum, redirect ke halaman login
//     header('Location: ../login/login.php');
//     exit;
// }
// Jika sudah login, tampilkan halaman utama
include '../koneksi.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>INI DASHBOARD</h1>
</body>

</html>