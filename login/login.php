<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PRABUSA | Login</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <img src="../img/prebusa.png" id="headImage" alt="" srcset="" />
  <div class="box">
    <div class="boxLeft">
      <img src="../img/mentahan login.png" alt="" srcset="" />
      <h2>let's buy candy<br />at our place</h2>
    </div>
    <div class="boxRight" id="boxMain">
      <form action="login_validasi.php" method="post">
        <h2>Login Disini</h2>
        <span>Belum punya akun?
          <a href="../signUp/signUp.html" class="yhp">Daftar disini</a></span>
        <div class="inputBox">
          <input type="text" required="required" id="user" name="user" />
          <span>EMAIL OR PHONE NUMBER</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="password" required="required" id="pass" name="pass" />
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