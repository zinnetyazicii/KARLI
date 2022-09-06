<?php
$user='epiz_30700640';
$pass='sNg6TmeK2q2s';
try {
    $db = new PDO('mysql:host=sql101.epizy.com;dbname=epiz_30700640_mars;charset=utf8', $user, $pass);
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}

$base=$_SERVER["DOCUMENT_ROOT"];
$url='http://zinnet.42web.io';

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?>