<?php include 'baglan.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Patnos MeslekYüksekokulu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="containerr">
        <br>
        <div class="header p-4">

            <div>
                <h2 class="text-center bg-success p-3" style="color:white;">PATNOS MESLEK YÜKSEKOKULU KÜTÜPHANE
                    OTOMASYONU</h2>
            </div>

        </div>

        <div class="card ">
            <h3></h3>

            <div>
                <form action="islem.php" method="post">
                    <label for="fname">E-mail Giriniz</label>
                    <input type="email" id="fname" name="kullanici_mail" required placeholder="Email Giriniz"><br>

                    <label for="lname">Şifre Giriniz</label>
                    <input type="password" id="lname" name="kullanici_sifre" placeholder="Şifre Giriniz">



                    <input type="submit" name="giris" value="Giriş">

                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>