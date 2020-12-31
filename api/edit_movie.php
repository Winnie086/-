<?php
include_once "../base.php";

// print_r($_POST);

$movie=$Movie->find($_POST['id']);

if(!empty($_FILES['trailer']['tmp_name'])){
  $movie['trailer']=$_FILES['trailer']['name'];
  move_uploaded_file($_FILES['trailer']['tmp_name'],'../img/'.$_FILES['trailer']['name']);
}

if(!empty($_FILES['poster']['tmp_name'])){
  $movie['poster']=$_FILES['poster']['name'];
  move_uploaded_file($_FILES['poster']['tmp_name'],'../img/'.$_FILES['poster']['name']);
}

foreach($movie as $key=>$value){
  if(isset($_POST[$key])){
    if($value!= $_POST[$key]){
      $movie[$key]=$_POST['key'];
    }
  }
}


// $_POST['sh']=1;
// $_POST['rank']=$Movie->q("select max(rank) from poster")[0][0]+1;

$Movie->save($movie);

to("../backend.php?do=movie");

?>