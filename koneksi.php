<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prebusa";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
