<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/dbcon.php';

  $pid = $_POST['cid'];
  $sql = "DELETE FROM coupons WHERE cid = {$pid}";
  $result = $mysqli -> query($sql);

  if($mysqli->query($sql) === true){
    echo "<script>
    alert('삭제성공');
    location.href='/clean_kangaroo/admin/coupon/coupon_list.php';
    </script>";
  };
  
  $script1 = '<script src="../../js/coupon.js"></script>';
?>