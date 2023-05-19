<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link rel="stylesheet" href="css dosyalari/login1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-image: url(resimler/loginBG.jpg);
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: -2.5rem;
            background-color: antiquewhite;
            background-size: 90vh;
        }
    </style>

</head>

<body>
    <a href="index.html" style="color:black;font-size: 2rem;"><i class="fa-solid fa-house"></i></a>
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Giriş Yap</h1>
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
                    <button href="login.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>                </div>
                </form>
                <a href="kayit.php"><button  name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button> 

            </div>
        </div>


    </div>
    </div>
    </div>



</body>

</html>