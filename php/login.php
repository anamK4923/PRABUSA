<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // koneksi ke database
    $mysqli = new mysqli("localhost", "root", "", "prebusa");

    // memeriksa koneksi
    if ($mysqli->connect_error) {
        die("Koneksi ke database gagal: " . $mysqli->connect_error);
    }

    // memeriksa username dan password
    $username = $_POST['username'];
    $password = md5($_POST['password']); // melakukan hash md5 pada password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        // login sukses
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // login gagal
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css" />



<body>
    <?php if (isset($error)) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?= $error; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <?php
    if (isset($_GET['register']) && $_GET['register'] == 'success') {
    ?>
        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                <strong>Registrasi berhasil Silahkan Login!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php   }
    ?>



    <img src="../img/prebusa.png" id="headImage" alt="" srcset="" />
    <div class="box">
        <div class="boxLeft">
            <img src="../img/mentahan login.png" alt="" srcset="" />
            <h2>let's buy candy<br />at our place</h2>
        </div>
        <div class="boxRight" id="boxMain">
            <form action="" method="post">
                <h2>Login Disini</h2>
                <span>Belum punya akun?
                    <a href="../php/register.php" class="yhp">Daftar disini</a></span>
                <div class="inputBox">
                    <input type="text" required="required" id="username" name="username" />
                    <span>EMAIL OR PHONE NUMBER</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required="required" id="password" name="password" />
                    <span>PASSWORD</span>
                    <i></i>
                </div>
                <div class="rememberBox">
                    <div class="rememberBoxLeft">
                        <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked" />
                        <span>Ingat Saya</span>
                    </div>
                    <div class="rememberBoxRight">
                        <span>Lupa password</span>
                    </div>
                </div>
                <button type="submit" class="login">Login</button>
            </form>
        </div>
    </div>




</body>

</html>