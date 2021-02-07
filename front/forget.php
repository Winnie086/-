<fieldset>
  <legend>忘記密碼</legend>
<form>
  <table>
    <tr>
      <td>請輸入信箱以查詢密碼</td>
    </tr>
    <tr>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr id="result">
      <td></td>
    </tr>
    <tr>
      <td><input type="button" value="尋找" onclick="findPw()"></td>
    </tr>
  </table>
</form>

</fieldset>


<script>

function findPw(){
  let email=$("#email").val()
  $.get("api/forget.php",{email},function(result){
    $("#result").html(result)
  })


}


</script>