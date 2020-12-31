<div class="rb tab" style="98%">
<button>新增電影</button>
<hr>
<div style="max-height:450px;overflow-y:auto">






</div>

</div>





   

<script>
function sw(idx,idy){
      $.post('api/sw.php',{table:'poster',idx,idy},function(){
       location.reload()
      })
}

</script>