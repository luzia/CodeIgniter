<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script type="text/javascript">
function add_message(obj){
	var name=$("input[name='name']").val();
	var msg=$("textarea[name='msg']").val();
	var str="name="+name+"&msg="+msg;
	var myTable = document.getElementById("myTable");
	var row=myTable.rows.length;
	var dateTime = new Date('year');
	
	$.ajax({
		type: "POST",
		url: "message_add.php",
		data: str,
		success: function(){
			//var th=document.getElementById('myTable').createTHead();
			var tr=document.getElementById('myTable').insertRow(row);
			tr.insertCell(0).innerHTML='<input type="checkbox" name="ck[]" value="" />';
			tr.insertCell(1).innerHTML='NO';
			tr.insertCell(2).innerHTML=name;
			tr.insertCell(3).innerHTML=msg;
			tr.insertCell(4).innerHTML="時間";
			tr.insertCell(5).innerHTML='<input type="button" name="button" id="button" value="刪除" onclick="del_message(this)" />';
		}
	});
}

</script>
</head>

<body>

<legend>留下訊息</legend>
  <p>&nbsp;</p>
  <table id="addMessage" width="30%" border="1" align="center">
    <tr>
      <td>
      <label for="name">姓名</label>
      <input type="text" name="name" id="name" value="<?php echo $title;?>" />
      </td>
    </tr>
    <tr>
      <td>
      <label for="msg" class="control-label">留言內容</label>
      <div><textarea id="msg" name="msg" cols="50" rows="10"><?php echo $comment;?></textarea></div>
      </td>
    </tr>
    <tr>
      <td align="center">
      <input type="submit" name="save" id="button" value="送出留言" onclick="add_message(this)" />
      <input type="reset" name="clear" id="clear" value="重新填寫" />
	  </td>
    </tr>
  </table>

</body>
</html>