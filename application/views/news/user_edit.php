<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增作者</title>
</head>

<body>
<legend>新增作者資訊</legend>
    <form action="/news/ac" method="POST" >
        <table id="addMessage" width="30%" border="1" align="center">
        <tr>
            <td>
            <label for="user_name">作者名稱</label>
            <input type="text" name="user_name" value="<?php echo $data['user_name'];?>" />
            </td>
        </tr>
        <tr>
            <td>
            <label for="user_company">公司名稱</label>
            <input type="text" name="user_company" value="<?php echo $data['user_company'];?>" />
            </td>
        </tr>
        <tr>
            <input type="hidden" name="user_id" value="<?php echo $data['user_id'];?>" />
            <input type="hidden" name="ac" value="user_edit" />
            <td align="center"><input type="submit" name="save" id="button" value="儲存" /></td>
        </tr>
        </table>
    </form> 
</body>
</html>