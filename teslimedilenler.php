<?php 

include 'baglan.php';

$kullanicisor = $db -> prepare('SELECT * FROM kullanicigiris WHERE kullanici_mail=:kullanici_mail');
$kullanicisor -> execute([

      'kullanici_mail' => $_SESSION['userkullanici_mail']

]);

$say = $kullanicisor -> rowCount();
$kullanicicek = $kullanicisor -> fetch(PDO::FETCH_ASSOC);

if ($say == 0) {


  header('location:index.php?izinsizgiris');

  exit;
}





?>

<!doctype html>
<html lang="en">

<head>
    <title>Patnos MeslekYüksekokulu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="ss.css">

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="anasayfa.php" class="navbar-brand"> <b style="color:white;">Giriş Yapan Kullanıcı :
                <?php  echo $kullanicicek['kullanici_isim'] ?> </b></a>
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto" style="position:absolute;right:130px;">
                    <li class="nav-item active">

                    </li>
                    <li class="nav-item">
                        </li>
                        <a class="nav-link active" href="anasayfa.php">Anasayfa</a>
                        
                        
                    <li class="nav-item">
                        <div class=""><a class="nav-link  active" href="alinankitap.php">Alınan Kitaplar<svg
                                    style="margin:5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path
                                        d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg></a></div>
                        
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="teslimedilenler.php">Teslim Edilenler</a></li>
                </ul>

                <div "><a href=" cikis.php" class="btn bg-danger "
                    style="color:white; position:absolute; right:0px; top:0; font-size:20px; margin:5px; text-decoration:none;">
                    Çıkış Yap <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg></a></div>
            </div>
        </div>
    </nav>




    <!-- arama kutusu baslangic -->

    <nav class="navbar navbar-light bg-light justify-content-between">
        <b></b>
        <form class="form-inline" action="teslimedilenler.php" method="post">
            <input class="form-control mr-sm-2" type="search" name="kelime" placeholder="Bir Şeyler Yazın"
                aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Arama Yap</button>
        </form>
    </nav>
    <?php 
//onemli uyarı arama kutucugu oluşturmak isityorsan form method post vericen ve arama yazılacak input da name verilecek ve asagıdaki gibi olucaktır..
if (isset($_POST['kelime'])) {
    $kelime = $_POST['kelime'];
    if (!$kelime) {
              
       echo  '<div class="alert alert-dark text-center" role="alert">
       -----  Arama Yapabilmek İçin Birşeyler Yazın -----
     </div>';
    }else {
        $sorgu =$db ->prepare('SELECT * FROM kayitli_kitaplar  WHERE ogrenci_ad  LIKE  :ogrenci_ad');
        $sorgu ->execute(array(':ogrenci_ad'=> '%'.$kelime.'%'));
        
    
    if ($sorgu -> rowCount()) {
        foreach ($sorgu as $row) {
          
  
            echo '<div class="alert alert-success " role="alert">'.
            $row['ogrenci_ad'] .' Aldığı Kitabı Bıraktı</b>
          </div>';
       
        }
        
    }else {

    echo'<div class="alert alert-danger text-center" role="alert">
    Aranan Ad  Soyad bulunamadı
  </div>';
    }
    }
}



?>

    <!-- arama kutusu bitis -->

<div class="container ">

    <div class="card p-3">
        <div class="table">
            <h1 class="text-center">KİTAP BIRAKANLAR LİSTESİ</h1>
            <table border="7">
                <tr>
                    <th>SIRA</th>
                    <th>KİTAP ADI</th>
                    <th>ADI SOYADI</th>
                    <th>OKUL NUMARASI</th>
                    <th>BÖLÜM</th>
                    <th>SINIF</th>
                    <th>VERİLEN TARİH VE SAAT</th>
                    <th>ALINAN TARİH VE SAAT</th>
                   

                    
                    
                </tr>
       




                <?php   

            

// tum veriyi almak için aşagıdaki gibi yapıyoruz
$sorgu = $db->query("SELECT * FROM kayitli_kitaplar");
$siraNo=0; 
while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {

$siraNo=++$siraNo; // bagımsız id harici deger atama
    $id = $sonuc['id']; 
    $kitap = $sonuc['ogrenci_kitap'];
    $ad = $sonuc['ogrenci_ad'];
    $numara = $sonuc['ogrenci_no'];
    $bolum = $sonuc['ogrenci_bolum'];
    $sinif = $sonuc['ogrenci_sinif'];
    $kayit = $sonuc['ogrenci_aldigi_tarih'];
    $verildigi = $sonuc['ogrenci_verdigi_tarih'];
    
    
    ?>
<th></th>
                <tr>
                    <th style=" background:red;color:white;line-height: 50px;"><?php echo $siraNo?></th>
                    <th><?php echo $kitap?></th>
                    <th style="color:gray;"><?php echo $ad?></th>
                    <th><?php echo $numara?></th>
                    <th><?php echo $bolum?></th>
                    <th style="color:blue;"><?php echo $sinif?></th>
                    <th><?php echo $kayit?></th>
                    <th style="background-color:red;"><?php echo $verildigi?></th>
                    
                            

                </tr>

                <?php }?>
            </table>
        </div>

    </div>



</div>

                                   


<?php include 'footer.php';  ?>