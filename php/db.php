<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'prebusa';

// Buat koneksi ke database
$db = mysqli_connect($host, $username, $password, $dbname);

// Periksa apakah koneksi berhasil
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
