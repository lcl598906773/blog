<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="public/admin/css/pintuer.css">
    <link rel="stylesheet" href="public/admin/css/admin.css">
    <script src="public/admin/js/jquery.js"></script>
    <script src="public/admin/js/pintuer.js"></script>  
</head>
<body>
<form method="post" action="index.php?m=admin&c=index&a=book">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 回复管理</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>姓名</th>       
        <th>内容</th>
        <th>所属文章</th>
        <th>回复时间</th>
      </tr>      
      <?php if(!empty($res)):?>
      <?php foreach($res as $value): ?>
        <tr>
          <td><input type="checkbox" name="id[<?=$value['tid']; ?>]" value="<?=$value['id']; ?>" /><?=$value['id']; ?></td>
          <td><?=$value['name']; ?></td>
          <td><?=$value['content']; ?></td>
          <td><?=$value['title']; ?></td>
          <td><?php echo date('Y-m-d H:i:s', $value['replytime']);?></td>      
        </tr>
        <!-- <input type="hidden" name='tid[]' value="<?=$value['tid']; ?>"/> -->
      <?php endforeach;?>
      <?php endif;?>
      <tr> 
        <td><input type="submit" value="删除"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
		
	}
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; 		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

</script>
</body></html>