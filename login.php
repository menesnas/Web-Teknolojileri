<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link rel="stylesheet" href="css dosyalari/giris.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
    
    <a href="index.html"><i class="fa-solid fa-house"></i></a>
    <div class="container" >
        <div>
        <form id="formid" action="login.php" method="post">
            <h6>Kullanıcı Adı :</h6> <br><input type="email" name="ad">
            <h6>Şifre :</h6> <br><input type="password" name="sifre"><br>
            <input type="submit" value="Giriş Yap"><br>
            
        </form>
        <div class="php">
        <?php
    $color = "#FF0000";
    $color2 = "#FFFFFF";

     if(isset($_POST['ad']) =="" || isset($_POST['sifre'])=="" )
     {
        
         echo"<font color = $color2>*Lütfen Tüm Alanları Doldurun</font>";	
     }
     else
     {
         if ($_POST['ad']=="b211210006@sakarya.edu.tr" && $_POST['sifre']=="b211210006")
         {
             echo "<font color=$color2> Hoşgeldiniz</font>".$_POST['ad']."<br>" ;
             header("Refresh: 10; url=index.html");
             echo "<font color=$color>10 saniye sonra ANA SAYFAYA yönlendirileceksiniz.Beklememek için </font>".'<a href="index.html">TIKLAYINIZ</a>';
            
         }
         else
         {
             echo "<font color =$color>Hatalı Kullanıcı Adı veya Şifre Girdiniz.</font>";	
         }
    
         }
        
    ?>  
    </div>
    </div>  
    </div>
    


</body>
</html>