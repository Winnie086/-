<?php
include_once "../base.php";

// print_r($_POST);

foreach($_POST['id'] as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $Poster->del($id);
    }else{
        $poster=$Poster->find($id);
        $poster['name']=$Poster['name'][$key];
        $poster['ani']=$Poster['ani'][$key];
        $poster['sh']=in_array($id,$_POST['sh'])?1:0;
        $Poster->save($poster);
    }
}


to("../backend.php?do=poster");