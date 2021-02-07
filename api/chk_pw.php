<?php
include_once "../base.php";

$acc=$_GET['acc'];
$pw=$_GET['pw'];
$mem=$Mem->find(['acc'=>$acc,'pw'=>$pw]);

if(empty($mem)){
  echo 0;
}else{
  echo 1;
  $_SESSION['login']=$acc;
}


?>