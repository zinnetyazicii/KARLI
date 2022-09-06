<?php

$id = $param[2];
$lisans = $db->query("SELECT * FROM licence WHERE licence_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);

if ( $lisans ){
?>
<div class="container">
<form action="<?php echo $url.'/updateLicence/'.$id; ?>" method="post" id="lisansguncelleform">
		<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tür</label>
      <input type="text" class="form-control" name="tur" value="<?php echo $lisans["licence_type"]; ?>" >
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Lisans Süresi</label>
      <input type="text" class="form-control" name="lisans_suresi" value="<?php echo $lisans["licence_time"]; ?>">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4">Lisans Kodu</label>
      <input type="text" class="form-control" name="lisans_kod" value="<?php echo $lisans["licence_name"]; ?>">
    </div>
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Açıklama</label>
       <input type="text" class="form-control" name="acıklama" value="<?php echo $lisans["explanation"]; ?>">
    </div>
  </div>
	
 
  <button type="submit" class="btn btn-primary">Güncelle</button>
</form>
</div>
<script src="<?php echo $url; ?>/js/merih.js"></script>
<?php }
else
	echo " sen hayırdır ";
?>