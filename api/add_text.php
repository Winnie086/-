<?php
include_once "../base.php";

$type=$_POST['type']; //先抓到post過來的type

switch($type){ //用switch判斷是1-4的哪個，符合的存進資料庫
    case "1":
    $News->save(['type'=>1]);
    break;
    
    case "2":
    $News->save(['type'=>2]);
    break;

    case "3":
    $News->save(['type'=>3]);
    break;

    case "4":
    $News->save(['type'=>4]);
    break;
}


$_POST['sh']=1; //預設 存進去的資料要顯示
$_POST['good']=0; //預設 剛存進去還沒人按讚

$News->save($_POST); //最後再一併存進資料庫
?>