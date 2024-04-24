<?php 
include("header.php");
if ($_GET) 
{
 // veritabanı bağlantımızı sayfamıza ekliyoruz.
// id'si seçilen veriyi silme sorgumuzu yazıyoruz.
if ($db->query("DELETE FROM kullanicilar WHERE kullanici_id =".(int)$_GET['id'])) 
{
    header("location:alinankitap.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>