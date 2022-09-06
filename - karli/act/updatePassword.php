<?php
if(!isset($_SESSION)){
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
}
$site=$_POST["site"];
$pass_type=$_POST["pass_type"];
$username=$_POST["username"];
$pass=$_POST["pass"];
$acıklama=$_POST["acıklama"];


$id=$param[2];

$query = $db->prepare("update passwords set pass_site=?, pass_type=?, pass_username=?, pass=? ,pass_explanation=? WHERE pass_id = ?");
$update = $query->execute(array($site,$pass_type,$username,$pass,$acıklama,$id));

if ( $update ){	
  print "güncelleme başarılı!";
  echo '<meta http-equiv="refresh"content="1; url='.$url.'/updatePassword/'.$id.'">';
}

	

?>



