<?php include 'header.php';  ?>
<div class="container p-4">

    <div class="card p-5">
        <div class="tables">
            <table border="7">
                <tr>
                    <th>SIRA</th>
                    <th>KİTAP ADI</th>
                    <th>ADI SOYADI</th>
                    <th>OKUL NUMARASI</th>
                    <th>BÖLÜM</th>
                    <th>SINIF</th>
                    <th>TARİH VE SAAT</th>
                    <th>DÜZENLE</th>
                    <th>KİTAPI VERDİ</th>
                    <th>SİL</th>
                   
                </tr>
       




                <?php   

            

// tum veriyi almak için aşagıdaki gibi yapıyoruz
$sorgu = $db->query("SELECT * FROM kullanicilar");
$siraNo=0; 
while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {

$siraNo=++$siraNo; // bagımsız id harici deger atama
    $id = $sonuc['kullanici_id']; 
    $kitap = $sonuc['ogrenci_kitap'];
    $ad = $sonuc['ogrenci_ad'];
    $numara = $sonuc['ogrenci_no'];
    $bolum = $sonuc['ogrenci_bolum'];
    $sinif = $sonuc['ogrenci_sinif'];
    $kayit = $sonuc['ogrenci_aldigi_tarih'];
   
    
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
                    <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn  btn-primary p-2">Düzenle</a></td>
                    <td><a href="kitapteslim.php?id=<?php echo $id; ?>" class="btn  btn-success p-2">VERİLDİ</a></td>
                    <td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger p-3"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg></a></td>
                            

                </tr>

                <?php }?>
            </table>
        </div>

    </div>



</div>

                                   


<?php include 'footer.php';  ?>