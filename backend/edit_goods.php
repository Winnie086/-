<?php
$goods=$Goods->find($_GET['id']);
?>

<h2 class="ct">修改商品</h2>
<form action="api/edit_goods.php" method="post">
    <table class="all">
        <tr>
            <td class="tt">所屬大分類</td>
            <td class="pp">
                <select name="big" id="big" onchange="getMids()"></select>
            </td>
        </tr>
        <tr>
            <td class="tt">所屬中分類</td>
            <td class="pp">
                <select name="mid" id="mid"></select>
            </td>
        </tr>
        <tr>
            <td class="tt">商品編號</td>
            <td class="pp"><input type="text" name='num'></td>
        </tr>
        <tr>
            <td class="tt">商品名稱</td>
            <td class="pp"><input type="text" name='name'></td>
        </tr>
        <tr>
            <td class="tt">商品價格</td>
            <td class="pp"><input type="text" name='price'></td>
        </tr>
        <tr>
            <td class="tt">規格</td>
            <td class="pp"><input type="text" name='spec'></td>
        </tr>
        <tr>
            <td class="tt">庫存量</td>
            <td class="pp"><input type="number" name="quota"></td>
        </tr>
        <tr>
            <td class="tt">商品圖片</td>
            <td class="pp"><input type="file" name="img"></td>
        </tr>
        <tr>
            <td class="tt">商品介紹</td>
            <td class="pp"><textarea name="intro" style="width:90%;height:200px;"><?=$goods['intro'];?></textarea></td>
        </tr>
    </table>
    <div class="ct">
        <input type="hidden" value="<?=$goods['id'];?>">
        <input type="submit" value="修改">|
        <input type="reset" value="重置">
        <input type="button" value="返回" onclick="lof('?do=th')">
    </div>
</form>

<script>
getBigs();

function getBigs(){
        $.get("api/get_big.php",function(bigs){
            $("#big").html(bigs)

            $("#big option[value='<?=$goods['big'];?>']").prop('selected',true);
            getMids();
        })
}

function getMids(){
    $.get("api/get_mid.php",{bigId:$("#big").val()},function(mids){
        $("#mid").html(mids)
        $("#mid option[value='<?=$goods['mid'];?>']").prop('selected',true);
    })
}
</script>