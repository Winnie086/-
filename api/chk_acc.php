<?php
include_once "../base.php";

$acc=$_GET['acc'];
$mem=$Mem->find(['acc'=>$acc]);

if(empty($mem)){
  echo 0;
}else{
  echo 1;
}


?>