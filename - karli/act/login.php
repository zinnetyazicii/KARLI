<?php
if(!isset($_SESSION)){
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
}
$uname = $_POST['uname']; 
$pass = $_POST['pass']; 
$query = $db->query("SELECT * FROM  users WHERE user_name = '{$uname}' and password= '{$pass}'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
    $_SESSION["user"]=true;
	$_SESSION["uname"]=$query["user_name"];
	 echo '<meta http-equiv="refresh"content="1; url='.$url.'">';
}else{
	echo '
	<script>
		alert("Kullanıcı adı veya şifre hatalı");
	</script>
	';
}
?>