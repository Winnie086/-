<?php
include_once "base.php";

//預告片
for($i=0;$i<10;$i++){
  $data['name']="預告片".$i;
  $data['img']="03A".sprintf("%2d",$i).".jpg";
  $date['sh']=1;
  $date['rank']=$i;
  $date['ani']=rand(0,3);
  $Poster->save($data);

}

//院線片
$level=[
  1=>'普遍級',
  2=>'輔導級',
  3=>'保護級',
  4=>'限制級'];

for($i=1;$i<=20;$i++){
  $data=[];
  $data['num']=date("Y-m-d").sprintf("%04d",$i);
  $data['movie']="院線片".rand(2,5);
  $data['date']=date("Y-m-d");
  $data['session']=$sess[rand(2,4)];
  $data['seats']=serialize([$i]);
  $data['qt']=1;

  $data['year']=2021;
  $data['month']=3;
  $data['day']=rand(5,9);
  $data['ondate']=$data['year']."-".$data['month']."-".$date['day'];
  $data['publish']="院線片".$i."的發行商";
  $data['director']="院線片".$i."的導演";
  $data['intro']=str_repeat("院線片 $i 的劇情介紹",10);
  $Poster->save($data);

}




?>