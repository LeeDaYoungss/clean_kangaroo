<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/dbcon.php';

$userid = trim($_POST['userid']);
$passwd = trim($_POST['passwd']);
$passwd = hash('sha512', $passwd);

$sql = "SELECT * FROM members where userid='{$userid}' and passwd = '{$passwd}'";
$result = $mysqli->query($sql);
$rs = $result->fetch_object();

// $rs -> idx

if ($rs) {
  $_SESSION['UNAME'] = $rs->username;


  echo "<script>
    alert('".$_SESSION['UNAME']."님 반갑습니다');
    location.href = '/clean_kangaroo/user/index.php';
  </script>";
  exit();
} else {
  echo "<script>
    alert('실패');
    history.back();    
  </script>";
  exit();
}