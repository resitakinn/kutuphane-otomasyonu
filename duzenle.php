<?php 
include('header.php'); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>

<br><br>


<?php 

$sorgu = $db->query("SELECT * FROM kullanicilar WHERE kullanici_id =".(int)$_GET['id']); 
//id değeri ile düzenlenecek verileri veritabanından alacak sorgu

$sonuc = $sorgu->fetch(PDO::FETCH_ASSOC); //sorgu çalıştırılıp veriler alınıyor

?>

<div class="container">
    <div class="card-body p-4">

        <form action="" method="post">

            <table class="table">

                <tr>
                    <td>ALdıgı Kitap</td>
                    <td><input type="text" name="ogrenci_kitap" class="form-control"
                            value="<?php echo $sonuc['ogrenci_kitap'];  ?>">
                    </td>
                </tr>
                <tr>
                    <td>Ad Soyad</td>
                    <td><input type="text" name="ogrenci_ad" class="form-control"
                            value="<?php echo $sonuc['ogrenci_ad'];  ?>">
                    </td>
                </tr>
                <tr>
                    <td>Öğrenci Numara</td>
                    <td><input type="text" name="ogrenci_no" class="form-control"
                            value="<?php echo $sonuc['ogrenci_no'];  ?>">
                    </td>
                </tr>
                <tr>
                    <td>Bölüm</td>
                    <td><input type="text" name="ogrenci_bolum" class="form-control"
                            value="<?php echo $sonuc['ogrenci_bolum'];  ?>">
                    </td>
                </tr>

                <tr>
                    <td>Sınıf</td>
                    <td><textarea name="ogrenci_sinif"
                            class="form-control"><?php echo $sonuc['ogrenci_sinif']; ?></textarea></td>

                </tr>
                <tr>
                    <td>Sınıf</td>
                    <td><textarea name="ogrenci_aldigi_tarih"
                            class="form-control"><?php echo $sonuc['ogrenci_aldigi_tarih']; ?></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
                </tr>

            </table>

        </form>
    </div>
    <div>


    
        <?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.

    $baslik = $_POST['ogrenci_kitap']; // Post edilen değerleri değişkenlere aktarıyoruz
    $ad = $_POST['ogrenci_ad'];
    $numara = $_POST['ogrenci_no'];
    $bolum = $_POST['ogrenci_bolum'];
    $sinif = $_POST['ogrenci_sinif'];
    $siniff = $_POST['ogrenci_aldigi_tarih'];
  

    if ($baslik<>"" && $ad<>"" && $numara<>"" && $bolum<>"" && $sinif<>"" &&$siniff) { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
        
        // Veri güncelleme sorgumuzu yazıyoruz.
        if ($db->query("UPDATE kullanicilar SET ogrenci_kitap = '$baslik', ogrenci_ad =  '$ad', ogrenci_no ='$numara', ogrenci_bolum = '$bolum',ogrenci_sinif = '$sinif' ,ogrenci_aldigi_tarih='$siniff' WHERE kullanici_id =".$_GET['id'])) 
        {
            header("location:alinankitap.php"); 
            // Eğer güncelleme sorgusu çalıştıysa alinankitap.php sayfasına yönlendiriyoruz.
        }
        else
        {
            echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
        }
    }
}
?>
        <?php  include 'footer.php';  ?>