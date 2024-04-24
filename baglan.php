

<?php  



try {
    $db = new PDO('mysql:host=localhost;dbname=kutuphane','root','');
    // echo 'Veri Tabanı Başarılı...';
} catch (Exception $th) {
    echo $th;
}

ob_start();
session_start();

?>