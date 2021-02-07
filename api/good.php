<?php
include_once "../base.php";

$id=$_POST['id'];     //取得POST傳送過來的文章id
$type=$_POST['type']; //取得POST傳送過來的動作代號
$user=$_POST['user']; //取得POST傳送過來的登入者帳號名
$post=$News->find($id);//根據文章id取得文章資料



switch($type){//根據動作代號(1:讚,2:收回讚)，來對資料表做不同的動作
    case 1:
        $Log->save(['news'=>$id,'user'=>$user]);//按讚時先向log資料表新增一筆資料，紀錄那位會員對某篇文章按讚
        $post['good']++; //將文章的good欄位加1，做為統計人氣
        $News->save($post);//將文章資料存回資料表
    break;
    case 2:
        $Log->del(['news'=>$id,'user'=>$user]); //返回讚時向資料表刪求符合請求的資料
        $post['good']--;  //將文章的按讚數減一
        $News->save($post); //將文章資料存回資料表
    break;
    
}



?>