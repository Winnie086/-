<?php
include_once "../base.php";

$bigs=$Type->all(['parent'=>$_GET['bigId']]);

foreach($bigs as $big){
  echo "<option value='{$mid['id']}'>{$mid['name']}</option>";
}




?>