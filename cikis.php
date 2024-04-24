<?php



session_start();
session_destroy();
echo '<h1 style=\'text-align:center; margin-top:45px; font-weight:bold;\'>Çikiş Yaptınız Anasayfaya Yonlendiliriyorsunuz. </h1>';

header('Refresh:1; url=index.php');

?>