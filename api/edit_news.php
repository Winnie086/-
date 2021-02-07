<?php
include_once "../base.php";

foreach($_GET['id'] as $id){
  if(isset($_GET['del']) && in_array($id,$_GET['del'])){
    $News->del($id);
  }else{
    $news=$News->find($id);
    $news['sh']=(isset($_GET['sh']) && in_array($id,$_GET['sh']))?1:0;
    $News->save($news);
  }

}
to("../admin.php?do=news");

?>