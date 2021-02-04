function del{
  $.post('api/del.php',{table, id}, function(){
        location.reload()
  })
}