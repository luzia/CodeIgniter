<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增留言</title>
</head>

<body>
<legend>留下訊息</legend>
  <p>&nbsp;</p>
  <form action="/guestbook/insert_db" method="POST" >
  <table id="addMessage" width="30%" border="1" align="center">
    <tr>
      <td>
      <label for="title">姓名</label>
      <input type="text" name="title" id="title" value="" />
      </td>
    </tr>
    <tr>
      <td>
      <label for="message" class="control-label">留言內容</label>
      <div><textarea id="message" name="message" cols="50" rows="10"></textarea></div>
      </td>
    </tr>
    <tr>
      <td align="center">
      <input type="submit" name="save" id="button" value="送出留言" onclick="add_message(this)" />
      <input type="reset" name="clear" id="clear" value="重新填寫" />
	  </td>
    </tr>
  </table>
  </form>
</body>
</html>