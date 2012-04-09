<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料列表</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$("#ck_all").click(function(){
	if($("#ck_all").attr("checked")){
		$("input[name='ck[]']").each(function(){
			$(this).attr("checked",true);
		});
	}else{
		$("input[name='ck[]']").each(function(){
			$(this).attr("checked",false);
		});
	}
});

</script>
</head>

<body>
  <table border="1" name="myTable" id="myTable" >
    <tr>
		<th><input type="checkbox" name="ck_all" id="ck_all" /></th>
		<th>編號</th>
		<th>標題</th>
		<th>內容</th>
		<th>功能</th>
	</tr>
	<?php 
	foreach($data as $row){
	?>
	<tr>
		<td><input type="checkbox" name="ck[]" id="ck[]" value="<?php echo $row['id'];?>" /></td>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['message'];?></td>
		<td><a href="/guestbook/add">新增</a> <a href="/guestbook/edit?id=<?php echo $row['id'];?>">修改</a> <a href="/guestbook/delete?id=<?php echo $row['id'];?>">刪除</a></td>
	</tr>
	<?php 
	}
	?>
  </table>
</body>
</html>