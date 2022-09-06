<?php	
if(!isset($_SESSION)){
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
}
$site=$_POST["site"];
$tur=$_POST["tur"];
$kullanici_adi=$_POST["kullanici_adi"];
$pass=$_POST["pass"];
$acıklama=$_POST["acıklama"];


$query = $db->prepare("insert into  passwords set pass_site=?, pass_type=?, pass_username=?, pass=? ,pass_explanation=?,update_date=now(),update_by=?, state=?");
$update = $query->execute(array($site,$tur,$kullanici_adi,$pass,$acıklama,$_SESSION["uname"],1));

if ( $update ){	
     echo "
	 <script>
		$.ajax({
			
			url: url+'/view/addPassword.php',
			success:function(result){
				$('#maincont').html(result);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
			});
		
		modal('Başarılı','Şifre  başarıyla eklendi.');
	 </script>
	";
}else{
	echo 'Şifre eklerken hata oluştu';
}

?>