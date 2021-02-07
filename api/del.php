<?php
include_once "../base.php";

$del=$_GET['del'];

if(isset($del)){
  foreach($del as $id){
    $Mem->del($id);
  }
}

to("../admin.php?do=main");
?>