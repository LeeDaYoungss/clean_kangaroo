<?php
 include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/dbcon.php';

  $cartid = $_POST['cartid'];
  
  foreach($cartid as $ctid){
    $sql = "DELETE from cart where cartid=$cartid";
    $result = $mysqli->query($sql);

  }
  $return_data = array("result"=>$result); 
  echo json_encode($return_data);
  exit;
?>