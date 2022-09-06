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

$query = $db->prepare("insert into  licence set licence_type=?, licence_time=?, licence_name=? ,explanation=?, state=?");
$update = $query->execute(array($tur,$lisans_suresi,$lisans_kod,$acıklama,'1'));

if ( $update ){	
     echo "
	 <script>
		$.ajax({
			
			url: url+'/view/addLicence.php',
			success:function(result){
				$('#maincont').html(result);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
			});
		
		modal('Başarılı','Lisans bilgisi başarıyla eklendi.');
	 </script>
	";
}else{
	echo 'Lisans eklerken hata oluştu';
}

?>