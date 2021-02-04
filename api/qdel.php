<?php
include_once "../base.php";

$type=$_POST['type'];
$value=$_POST['value'];

$Orders->del([$type=>$value]);


// 寫法=
// $Orders->del([$_POST['type']=>$_POST['value']]);

?>