    <?php


include 'baglan.php';

if (isset($_POST['giris'])) {
$mail = $_POST['kullanici_mail'];
$sifre = $_POST['kullanici_sifre'];

        $kullanicicek = $db -> prepare('SELECT * FROM kullanicigiris WHERE kullanici_mail=:kullanici_mail and kullanici_sifre=:kullanici_sifre');
        $kullanicicek -> execute([
        'kullanici_mail' => $mail,
        'kullanici_sifre'=>$sifre

        ]);

$say =$kullanicicek ->rowCount();
if ($say == 1) {
    $_SESSION['userkullanici_mail']=$mail;

    header('location:anasayfa.php?girisbasarili');
    exit;

}
else {
    header('location:index.php?giris=hatali');
    exit;
}

}













?>