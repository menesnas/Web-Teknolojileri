<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt ol</title>
    <link rel="stylesheet" type="text/css" href="css dosyalari/login1.css">


</head>
<body>
<a href="index.html"><i class="fa-solid fa-house"></i></a>
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Kayıt Ol</h1>
                </div>
                <form action="islem.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="email" name="kadi" id="login-name" class="logib-field" placeholder="Kullanıcı adı" required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="sifre" class="login-field" placeholder="Şifre" id="login-pass" required>
                        <label class="login-field-icon fui-user" for="login-pass"></label>
                    </div>
                    <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button> 
                </div>
                </form>
                <a href="login.php"><button name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
</a>
            </div>
        </div>



</body>
</html>