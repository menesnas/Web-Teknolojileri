
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoşgeldiniz</title>
    <style>
        html {
            background-color: darkgray;
            display: flex;
            flex-direction: column;
        }

        .hg .text {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="hg">
        <div class="text">
            <h3>HOŞGELDİNİZ </h3>
            <?php
            echo $_POST['kadi'];
            ?>

        </div>
    </div>
    <?php
            header("Refresh: 10; url=index.html");
            die('10 saniye sonra ana sayfaya yönlendirileceksiniz. Beklememek için
            <a href="index.html">Tıklayın.</a>');

            ?>
</body>

</html>