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
<?php 

if(isset($_POST['kaydet'])){
    $ogrencikitap = $_POST['ogrenci_kitap'];
    $ogrenciadi = $_POST['ogrenci_ad'];
    $ogrencino = $_POST['ogrenci_no'];
    $ogrencibolum = $_POST['ogrenci_bolum'];
    $ogrencisinif = $_POST['ogrenci_sinif'];
    $ogrencitarih = $_POST['ogrenci_aldigi_tarih'];
   
  
$sorgu = $db -> prepare ('INSERT INTO kayitli_kitaplar SET

    ogrenci_kitap=?,
    ogrenci_ad=?,
    ogrenci_no=?,
    ogrenci_bolum=?,   
    ogrenci_sinif=?,
    ogrenci_aldigi_tarih=?

 ');
 $kaydet = $sorgu -> execute([
     $ogrencikitap , $ogrenciadi , $ogrencino , $ogrencibolum , $ogrencisinif , $ogrencitarih
 ]);

 if ($kaydet) {
    echo'<div class="alert alert-success text-center" role="alert">
    İşlem Başarılı Yönlendiliyorsunuz...
  </div>';
    header('Refresh:2;teslimedilenler.php');
    
 }
}

?>
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
                    <td>Aldığı Tarih</td>
                    <td><textarea name="ogrenci_aldigi_tarih"
                            class="form-control"><?php echo $sonuc['ogrenci_aldigi_tarih']; ?></textarea></td>
                </tr>

                  

                <tr>
                    <td></td>
                    <td><button type="submit" name="kaydet" class="btn bg-danger">Kaydet</button></td>
                </tr>

            </table>

        </form>
    </div>
    <div>


    

        <?php  include 'footer.php';  ?>