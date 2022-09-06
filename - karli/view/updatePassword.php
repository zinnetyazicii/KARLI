<?php

$id = $param[2];
$pass = $db->query("SELECT * FROM passwords WHERE pass_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);

if ( $pass ){
?>
<div class="container">
<form action="<?php echo $url.'/updatePassword/'.$id; ?>" method="post" id="sifreguncelleform">
 
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Site</label>
      <input type="text" class="form-control" name="site" value="<?php echo $pass["pass_site"]; ?>" >
    </div>
  </div>
  	
		
		
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tür</label>
      <input type="text" class="form-control" name="pass_type" value="<?php echo $pass["pass_type"]; ?>" >
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Kullanıcı Adı</label>
      <input type="text" class="form-control" name="username" value="<?php echo $pass["pass_username"]; ?>">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4">Şifre</label>
      <input type="text" class="form-control" name="pass" value="<?php echo $pass["pass"]; ?>">
    </div>
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Açıklama</label>
       <input type="text" class="form-control" name="acıklama" value="<?php echo $pass["pass_explanation"]; ?>">
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