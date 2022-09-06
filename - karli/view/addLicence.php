<?php
if(!isset($_SESSION)){
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
}

?>
<div class="container">
<form action="<?php echo $url; ?>/addLicence" method="post" id="addLicenceForm">
	
	<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tür</label>
      <input type="text" class="form-control" name="tur" >
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Lisans Süresi</label>
      <input type="text" class="form-control" name="lisans_suresi" >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4">Lisans Kodu</label>
      <input type="text" class="form-control" name="lisans_kod">
    </div>
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Açıklama</label>
       <input type="text" class="form-control" name="acıklama">
    </div>
  </div>
    
 
  <a href="javascript:void(0)" onclick="lisansekle()" id="lisanskaydet_btn" class="btn">Kaydet</a>
</form>
</div>


<script src="<?php echo $url; ?>/js/merih.js"></script>