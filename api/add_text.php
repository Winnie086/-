<?php
include_once "../base.php";

$type=$_POST['type']; //先抓到post過來的type
$_POST['sh']=1; //預設 存進去的資料要顯示
$_POST['good']=0; //預設 剛存進去還沒人按讚

$News->save($_POST); //最後再一併存進資料庫
?>