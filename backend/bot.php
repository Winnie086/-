<?php
if(!empty($_POST['bottom'])){
  $bot=$Bottom->find(1);
  // $bot=$Bottom -> find(1) <=找到id為1的這筆資料，它現在是陣列 ;

  $bot['bottom']=$_POST['bottom'];
  // $bot['bottom']   ['bottom']<=要更改 資料庫bottom這個欄位中 的資料  =   $_POST['bottom']<=我們編輯的資料;
  $Bottom->save($bot);
}

?>

<h2 class="ct">編輯頁尾版權區</h2>
<form action="?do=bot" method="post">
  <table class="all">
    <tr>
      <td class="tt">頁尾宣告內容</td>
      <td><input type="text" id="bot" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>"></td>
    </tr>
  </table>

<div class="ct">
  <input type="submit" value="編輯">
  <input type="button" value="重置" onclick="javascript:$('#bot').val('')">
</div>

</form>

