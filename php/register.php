<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signUp.css" />

</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error']; ?>
        <div class="alert">
            <span class="closebtn">&times;</span>
            <strong><?= $error; ?>!!</strong>
        </div>

    <?php  }
    ?>
    <img src="../img/prebusa.png" id="headImage" alt="" srcset="" />
    <div class="box">
        <div class="boxLeft">
            <img src="../img/mentahan login.png" alt="" srcset="" />
            <h2>let's buy candy<br />at our place</h2>
        </div>
        <div class="boxRight" id="boxMain">
            <form method="post" action="register_process.php" autocomplete="off">



                <h2>REGISTER FORM</h2>
                <span>Sudah punya akun?
                    <a href="../php/login.php" class="yhyh">Login disini</a></span>
                <div class="inputBox">
                    <input type="text" required name="username" />
                    <span>Your Name</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required name="email" />
                    <span>Your E-mail</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required name="password" />
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="inputBox" id="hhhh">
                    <input type="text" required name="password" />
                    <span>Confirm Password</span>
                    <i></i>
                </div>
                <div class="rememberBox">
                    <div class="rememberBoxLeft">
                        <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked" />
                        <span>I aggre to the
                            <a href="#" class="yhyh">Term & Conditions</a></span>
                    </div>
                </div>
                <button type="submit" class="login">REGISTER</button>
            </form>
        </div>
    </div>
</body>

</body>

</html>