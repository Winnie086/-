<?php
$goods=$Goods->find($_GER['id']);

?>

<h2 class="ct"><?=$goods['name'];?></h2>
<div class="pp" style="display:flex;overflow:auto;margin:5px;">
   <div style="display:inline-block;"><img src='./image/<?=$g['img']?>' style='width:200px;'>
     <a href="?do=detail&id=<?=$g['id'];?>"><img src="./image/<?=$g['img'];?>" alt=""></a>
  </div>
    <div style="display:inline-block;vertical-align:top;">
        <div class='tt ct'>分類<?=$Type->find($g['big'])['name'];?><?=$Type->find($g['mid'])['name'];?></div>
        <div>價錢:<?=$g['price'];?></div>
        <div>簡介:<?=$g['spec'];?></div>
        <div>特色:<?=mb_substr($g['intro'],0,25,'utf8');?></div>
        <div>:<?=$g['spec'];?></div>
        <div>庫存量:<?=$g['spec'];?></div>
    </div>
   </div>

   <div class="tt ct">
    <form action="?" method="get">
    購買數量:<input type="number" name="qt" value="1">
    <input type="text" name="do" value="buycart">
    <input type="text" name="goods" value="<?=$goods['id'];?>">
    <input type="submit" name="qt" style="background:url('./image/0402.jpg');width:60;height:20px" value="">
    </form>

   </div>