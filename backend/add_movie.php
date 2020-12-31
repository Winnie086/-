<h3 class="ct" style="margin:0">新增院線片</h3>
<form action="api/add_movie.php" method="post" enctype="multipart/form-data">
  <table style="width:100%">
    <tr>
      <td width="20%" style="vertical-align:top;text-align:right;">影片資料</td>
      <td>
      <div>片名:<input type="text" name="name"></div>
      
      <div>分級:<select name="level">
      <option value="普遍級">普遍級</option>
      <option value="輔導級">輔導級</option>
      <option value="保護級">保護級</option>
      <option value="限制級">限制級</option>
      </select>
      </div>
  
      <div>片長:<input type="text" name="length"></div>
  
      <div>上映日:
      <select name="year">年
        <option value="2021">2021</option>
        <option value="2022">2022</option>
      </select>
      <select name="month">月
        <?php
        for($i=1;$i<13;$i++){
          echo "<option value='$i'>$i</option>";
        }
        ?>
      </select>
      <select name="day">
        <?php
        for($i=1;$i<32;$i++){
          echo "<option value='$i'>$i</option>";
        }
        ?>
      </select>
      </div>
  
      <div>發行商:<input type="text" name="length">
      </div>
  
      <div>導演:<input type="text" name="director">
      </div>
  
      <div><input type="file" name="trailer"></div>
      
      <div><input type="file" name="poster"></div>
      </td>
    </tr>
    <tr>
      <td style="vertical-align:top;text-align:right;">劇情簡介</td>
      <td><textarea name="intro" id="" style="width:98%;height:60px;"></textarea></td>
    </tr>
  </table>
</form>