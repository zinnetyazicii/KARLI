<?php	
if(!isset($_SESSION)){
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
}
$tur=$_POST["tur"];
$lisans_suresi=$_POST["lisans_suresi"];
$lisans_kod=$_POST["lisans_kod"];
$acıklama=$_POST["acıklama"];


$id=$param[2];

$query = $db->prepare("update licence set licence_type=?, licence_time=?, licence_name=? ,explanation=? WHERE licence_id = ?");
$update = $query->execute(array($tur,$lisans_suresi,$lisans_kod,$acıklama,$id));

if ( $update ){	
  print "güncelleme başarılı!";
  echo '<meta http-equiv="refresh"content="1; url='.$url.'/updateLicence/'.$id.'">';
}

	

?>



