<?php
include_once "../base.php";

$do=$_GET['do'];
unset($_SESSION[$do]);

// switch($_GET['do']){
//   case "admin":
//     unset($_SESSION['admin']);
//   break;

//   case "mem":

//     break;
// }



unset($_SESSION[$_GET['do']]); //登出使用者
to("../index.php");



?>