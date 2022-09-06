<?php
if(!isset($_SESSION)){
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
	include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
}
$query = $db->query("SELECT * FROM licence where state=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){?>

<table class="table" id="personeltable">
  <thead>
    <tr>
      <th scope="col"><label id="kartid"></label><br><a href="javascript:void(0)">TÜR</a></th>
      <th scope="col"><label id="tc"></label><br><a href="javascript:void(0)">LİSANS SÜRESİ</a></th>
      <th scope="col"><label id="ad"></label><br><a href="javascript:void(0)">LİSANS KODU</a></th>
      <th scope="col"><label id="soyad"></label><br><a href="javascript:void(0)">AÇIKLAMA</a></th>
      <th scope="col"><a href="javascript:void(0)">İŞLEM</a></th>
     
    </tr>
  </thead>
  <tbody>
	 <?php	 
	 if (is_array($query) || is_object($query)){
    foreach ($query as $row){?>
    <tr>
      <td><?php echo $row["licence_type"]; ?></td>
	  <td><?php echo $row["licence_time"]; ?></td>
      <td><?php echo $row["licence_name"]; ?></td>
      <td><?php echo $row["explanation"]; ?></td>
	  <td>
	  <a href="<?php echo $url.'/updateLicence/'.$row["licence_id"]; ?>"><i class="far fa-edit" style="margin-right : 15px; "></i></a>
	  <a href="javascript:void(0)" onclick="deleteLicence(<?php echo $row["licence_id"]; ?>)" id="lisanssilbtn"><i class="fas fa-trash-alt"></i></a>
	 
	  </td>
	 
	</tr>
	<?php
	 }}} ?>
  </tbody>
</table>

<script src="<?php echo $url; ?>/js/zinnet.js"></script>
