<?php
if(!isset($_SESSION)){
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
}

?>
<div class="container">
<form action="<?php echo $url; ?>/addPassword" method="post" id="addPasswordForm">
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Site</label>
      <input type="text" class="form-control" name="site" >
    </div>
  </div>
  
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tür</label>
      <input type="text" class="form-control" name="tur" >
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Kullanıcı Adı</label>
      <input type="text" class="form-control" name="kullanici_adi" >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4">Şifre</label>
      <input type="text" class="form-control" name="pass">
    </div>
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Açıklama</label>
       <input type="text" class="form-control" name="acıklama">
    </div>
  </div>
    
 
  <a href="javascript:void(0)" onclick="sifreekle()" id="sifrekaydet_btn" class="btn">Kaydet</a>
</form>
</div>


<script src="<?php echo $url; ?>/js/merih.js"></script>