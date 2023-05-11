<?php
// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prebusa";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menangkap data pengguna dari halaman login
$user = $_POST['user'];
$pass = $_POST['pass'];

// Mengeksekusi perintah SQL untuk memeriksa informasi pengguna
$sql = "SELECT * FROM admin WHERE user='$user' AND pass='$pass'";
$result = mysqli_query($conn, $sql);

session_start();
// Memeriksa apakah query berhasil dieksekusi
if ($row = mysqli_num_rows($result) == 1) {
    // Jika informasi pengguna benar, arahkan ke halaman utama
    header("Location: ../admin/index.php");
} else {
    // Jika informasi pengguna salah, tampilkan pesan kesalahan
    echo "<script>alert('username atau password Anda salah');</script>";
    header("Refresh:0; url=login.php");

    // Kembali ke halaman login
}

// Menutup koneksi ke database
mysqli_close($conn);
