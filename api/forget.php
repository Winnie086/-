<?php
include_once "../base.php";

$email=$_GET['email'];
$mem=$Mem->find(['email'=>$email]);

if(empty($mem)){
  alert("查無此資料");
}else{
  echo "您的密碼為:".$mem['pw'];
}

?>