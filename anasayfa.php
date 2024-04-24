<?php include 'header.php';  ?>


<div class="container p-4">

    <div class="card p-5">

        <h1 class="text-center btn bg-danger" style="color:white;font-size:25px">Öğrenci Alinan Kitap Girme</h1>

        <form action="" method="post">
            <?php 
            
            if(isset($_POST['kaydet'])){
                $ogrencikitap = $_POST['ogrenci_kitap'];
                $ogrenciadi = $_POST['ogrenci_ad'];
                $ogrencino = $_POST['ogrenci_no'];
                $ogrencibolum = $_POST['ogrenci_bolum'];
                $ogrencisinif = $_POST['ogrenci_sinif'];
                $kontrol = $db -> query("SELECT * FROM kullanicilar WHERE ogrenci_no='$ogrencino' ")->fetch();
                
                if ($kontrol){
                    
                    echo '<div class="alert alert-success text-center" role="alert">
                    <strong>ÖĞRENCİ KİTAPI BIRAKMADIGI İÇİN YENİ BİR TANE ALAMAZ</strong>
                    </div>';
                        header('Refresh:2; anasayfa.php');
                }else {
                    $sorgu = $db -> prepare ('INSERT INTO kullanicilar SET
            
                    ogrenci_kitap=?,
                    ogrenci_ad=?,
                    ogrenci_no=?,
                    ogrenci_bolum=?,   
                    ogrenci_sinif=?
                    
                
                 ');
                 $kaydet = $sorgu -> execute([
                     $ogrencikitap, $ogrenciadi , $ogrencino ,$ogrencibolum , $ogrencisinif
                 ]);
                
                 if ($kaydet) {
                    echo '<div class="alert alert-primary text-center" role="alert">
                    <strong>KAYIT BAŞARILI</strong>
                    </div>';
                    header('Refresh:2; alinankitap.php');
                   
                 }
                }
              
           
            }
            
            
            ?>
            <div class="form-group ">

                <input type="text" class="form-control mb-3 text-center" name="ogrenci_kitap" id=""
                    placeholder="Alınan Kitap İsmi" required>
                <input type="text" class="form-control mb-3 text-center" name="ogrenci_ad" id=""
                    placeholder="Ad ve Soyad Giriniz" required>
               

                <input type="text" class="form-control mb-3 text-center" onkeypress="return isNumberKey(event)"
                    name="ogrenci_no" placeholder="Öğrenci No Giriniz" maxlength="9" required>
                <script>
                function isNumberKey(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                    return true;
                }
                </script>
                <select name="ogrenci_bolum" class="form-control mb-3 text-center" required>
                    <option value="">Bölüm Seçiniz</option>
                    <option value="Bilgisayar Programcılığı">Bilgisayar Programcılığı</option>
                    <option value="Biyomedikal Cihaz Teknolojisi">Biyomedikal Cihaz Teknolojisi</option>
                    <option value="Eczane Hizmetleri">Eczane Hizmetleri</option>
                    <option value="İnşaat Teknolojisi">İnşaat Teknolojisi</option>
                    <option value="Mimari Restorasyon">Mimari Restorasyon</option>
                    <option value="Optisyenlik">Optisyenlik</option>
                    <option value="Sivil Savunma ve İtfaiyecilik">Sivil Savunma ve İtfaiyecilik</option>
                </select>


                <select name="ogrenci_sinif" class="form-control mb-3 text-center" required>
                    <option value="">Sınıf Seçiniz</option>
                    <option value="1 Sınıf">1 Sınıf</option>
                    <option value="2 Sınıf">2 Sınıf</option>

                </select>
                <div class="form-group">


                    <div class="text-center ">
                        <button type="reset" class="btn btn-danger" style="position:absolute;left:350px;">Sıfırla</button>
                        <button type="submit" name="kaydet" class="btn btn-primary" style="position:absolute;right:350px;">Kaydet</button>

                    </div>
        </form>




    </div>




</div>





<?php  include 'footer.php';  ?>