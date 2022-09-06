<?php

if(!isset($_SESSION)){
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
}
$id = $_POST["data"];

$query = $db->prepare("UPDATE passwords SET
state = ? ,update_date =now() , update_by=? WHERE pass_id = ?");
$update = $query->execute(array(0,$_SESSION["uname"],$id));
if ( $update ){
     echo "
	 <script>
		$.ajax({
			
			url: url+'/view/passwords.php',
			success:function(result){
				$('#maincont').html(result);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
			});
		
		modal('Uyarı','Silme İşlemi Başarılı');
		$('#modalsilbtn').hide();
		
	 </script>
	 ";
}


?>