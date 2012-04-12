<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增新聞</title>
</head>

<body>
<div><a href="/news/add_news"><button>發表新聞</button></a></div>
<div><a href="/news/add_user"><button>新增作者</button></a></div>
<div><a href="/news/news_list"><button>新聞列表</button></a></div>
<div><a href="/news/user_list"><button>作者列表</button></a></div>
<div>
<legend>新增新聞內容</legend>
    <form action="/news/ac" method="POST" >
        <table id="addMessage" width="30%" border="1" align="center">
        <tr>
            <td>
            <label for="user_id">作者</label>
            <select  name="user_id" >
            <?php  
            foreach($user_data as $user)
            {
            ?>
                <option value="<?php echo $user['user_id'];?>" ><?php echo $user['user_name'];?></option>
            <?php  
            }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>
            <label for="news_title">新聞標題</label>
            <input type="text" name="news_title" />
            </td>
        </tr>
        <tr>
            <td>
            <label for="news_message">新聞內容</label>
            <textarea id="news_message" name="news_message" cols="50" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <input type="hidden" name="ac" value="news_insert" />
            <td align="center"><input type="submit" name="save" id="button" value="儲存" /></td>
        </tr>
        </table>
    </form> 
</div>
</body>
</html>