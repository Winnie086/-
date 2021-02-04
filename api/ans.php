<?php
include_once "../base.php";

echo $_SESSION['ans']==$_GET['ans'];

// 以上寫法等於 :
//if($_SESSION['ans']==$_GET['ans']){
//   echo 1;
// }else{
//   echo 0;
// }



?>