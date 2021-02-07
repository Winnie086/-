<style>
.header{
  background:#eee;
  cursor:pointer;
}
</style>

<fieldset>
  <legend>目前位置:首頁>最新文章區</legend>
<form action=""></form>
  <table>
    <tr style="margin:0 auto;">
      <td style="width:30%">標題</td>
      <td style="width:70%">內容</td>
    </tr>

    <?php
  $count=$News->count(['sh'=>1]);
  $div=5;
  $pages=ceil($count/$div);
  $now=(isset($_GET['p']))?$_GET['p']:1;
  $start=($now-1)*$div;

  $all=$News->all(['sh'=>1], " limit $start,$div");
  foreach($all as $news){
  ?>
  <tr>
    <td class="header"><?=$news['title'];?></td>

    <td>
    <span class="title"><?=mb_substr($news['text'],0,30,'utf8');?>...</span>
    <span class="text" style="display:none"><?=nl2br($news['text']);?></span>
    </td>

    <td>
    <?php
    if(!empty($_SESSION['login'])){
      $chk=$Log->count(['news'=>$news['id'],'user'=>$_SESSION['login']]);
        if(!empty($chk)){
    ?>
    <a href="#" id="good<?=$news['id'];?>" onclick="good('<?=$news['id'];?>','2','<?=$_SESSION['login'];?>')">收回讚</a>
    <?php
        }else{
    ?>

    <a href="#" id="good<?=$news['id'];?>" onclick="good('<?=$news['id'];?>','1','<?=$_SESSION['login'];?>')">讚</a>

    <?php
        }
    
    }
    ?>
    </td>

  </tr>
  <?php
  }
  ?>

</table>
  <div class="ct">
  <?php
  if(($now-1)>0){
    echo "<a href='index.php?do=news&p=".($now-1)."'> < </a>";
  }
  for($i=1;$i<=$pages;$i++){
    $fontsize=($i==$now)?"36px":"24px";
    echo "<a href='index.php?do=news&p=$i' style='font-size:$fontsize'>$i</a>";
  }
  if(($now+1)<=$pages){
    echo "<a href='index.php?do=news&p=".($now+1)."'> > </a>";
  }
  ?>
  </div>
</fieldset>

<script>
$(".header").on("click",function(){
  $(this).next().children('.title').toggle()
  $(this).next().children('.text').toggle()

})

</script>