<fieldset>
    <legend>最新文章管理</legend>
<form action="api/edit_news.php" method="get">
    <table>
        <tr colspan="4">
            <td><a href="?do=add_text"><input type="button" value="新增文章"></td></a>
        </tr>
        <tr>
            <td style="width:15%">編號</td>
            <td style="width:55%">標題</td>
            <td style="width:15%">顯示</td>
            <td style="width:15%">刪除</td>
        </tr>

        <?php
        $count=$News->count();
        $div=3;
        $pages=ceil($count/$div);
        $now=(isset($_GET['p']))?$_GET['p']:1;
        $start=($now-1)*$div;
        $all=$News->all(" limit $start,$div");
        foreach($all as $key=>$news){
        ?>
        <tr>
            <td style="background:#eee;"><?=$start+$key+1;?></td>
            <td><?=mb_substr($news['title'],0,20,"utf8");?>...</td>
            <td><input type="checkbox" name="sh[]" value="<?=$news['id'];?>" <?=($news['sh']==1)?"checked":"";?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$news['id'];?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$news['id'];?>"></td>
        </tr>

        <?php
        }
        ?>

    </table>
        <div class="ct">
        <?php
        if(($now-1)>0){
            echo "<a href='admin.php?do=news&p=".($now-1)."'> < </a>";
        }
        
        for($i=1;$i<=$pages;$i++){
            $fontsize=($i==$now)?"36px":"24px";
            echo "<a href='admin.php?do=news&p=$i' style='font-size:$fontsize'>$i</a>";
            
        }

        if(($now+1)<=$pages){
            echo "<a href='admin.php?do=news&p=".($now+1)."'> > </a>";
        }
        ?>
        </div>
        
        <div class="ct">
        <input type="submit" value="確定修改">
        </div>



</form>
</fieldset>