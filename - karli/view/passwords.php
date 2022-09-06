<?php
if(!isset($_SESSION)){
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/inc/cfg.php');
	include($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');
}
$query = $db->query("SELECT * FROM passwords where state=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){?>

<table class="table table-hover table-light" id="personeltable">
  <thead style="background-color:#fed136;">
    <tr>
      <th scope="col"><label id="kartid"></label><br><a href="javascript:void(0)">SİTE</a></th>
      <th scope="col"><label id="kartid"></label><br><a href="javascript:void(0)">TÜR</a></th>
      <th scope="col"><label id="tc"></label><br><a href="javascript:void(0)">KULLANICI ADI</a></th>
      <th scope="col"><label id="ad"></label><br><a href="javascript:void(0)">ŞİFRE</a></th>
      <th scope="col"><label id="soyad"></label><br><a href="javascript:void(0)">AÇIKLAMA</a></th>
      <th scope="col"><a href="javascript:void(0)">İŞLEM</a></th>
     
    </tr>
  </thead>
  <tbody>
	 <?php	 
	 if (is_array($query) || is_object($query)){
    foreach ($query as $row){?>
    <tr>
      <td><?php echo $row["pass_site"]; ?></td>
      <td><?php echo $row["pass_type"]; ?></td>
	  <td><?php echo $row["pass_username"]; ?></td>
      <td><?php echo $row["pass"]; ?></td>
      <td><?php echo $row["pass_explanation"]; ?></td>
	  <td>
	  <a href="<?php echo $url.'/updatePassword/'.$row["pass_id"]; ?>"><i class="far fa-edit" style="margin-right : 15px; "></i></a>
	  <a href="javascript:void(0)" onclick="deletePassword(<?php echo $row["pass_id"];?>)" id="sifresilbtn"><i class="fas fa-trash-alt"></i></a>
	 
	  </td>
	 
	</tr>
	<?php
	 }}} ?>
  </tbody>
</table>

<script src="<?php echo $url; ?>/js/zinnet.js"></script>
