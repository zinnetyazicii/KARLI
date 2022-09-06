<?php
//patron mavisi #04508c;
session_start();
include('cfg.php');
include('functions.php');
?>

<!doctype html>
<html lang="en">
<head>
<meta name="robots" content="noindex">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="<?php echo $url; ?>/css/all.css" rel="stylesheet">

<?php if($param[1]=='login' || @!$_SESSION["user"]){ ?>
<link rel="stylesheet" href="<?php echo $url; ?>/css/login.css">
<?php } ?>
<link rel="stylesheet" href="<?php echo $url; ?>/css/nav.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="icon" href="favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo $url; ?>/css/style.css">
<script src="<?php echo $url; ?>/js/jquery.min.js"></script>
<script src="<?php echo $url; ?>/js/zinnet.js"></script>
<script src="<?php echo $url; ?>/js/nav.js"></script>
</head>
<body id="body-pd" style="background-color:#eee;">
<?php 
if(@$_SESSION["user"]){
	
?>
<div class='dashboard'><!-- maincont-->
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   <nav class="navbar">
  
     <!-- LOGO -->
	    <div class="logo"> 
		<img src="favicon.png" width="50" height="50"  />
		KARLİ</div>
	
  
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li><a href="<?php echo $url; ?>">Anasayfa</a></li>
         <li><a href="javascript:void(0)" onclick="linkkarli('licenses')"> Lisanslar</a></li>
         <li><a href="javascript:void(0)" onclick="linkkarli('passwords')"> Şifreler</a></li>
         <li class="services">
           <a href="/">Ekle</a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="javascript:void(0)" onclick="linkkarli('addLicence')">Lisans Ekle </a></li>
             <li><a href="javascript:void(0)" onclick="linkkarli('addPassword')">Şifre Ekle </a></li>
             
           </ul>
         </li>
		  <li><a href="/">Ayarlar</a></li>
		  <li><a href="<?php echo $url; ?>/logout" >Çıkış</a></li>
         
       </div>
     </ul>
   </nav>
 

   
    <div class='dashboard-app'><!-- Container-->
       
		</header>
        <div class='dashboard-content'><!-- Container-->
            <div class='container'> <!-- Container-->
            <div id="maincont"> <!-- maincont-->
			
			<?php } else {
				include($_SERVER["DOCUMENT_ROOT"]."/view/login.php");
			} ?>