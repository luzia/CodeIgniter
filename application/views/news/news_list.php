<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新聞管理列表</title>
</head>

<body>
<div><a href="/news/add_news"><button>發表新聞</button></a></div>
<div><a href="/news/add_user"><button>新增作者</button></a></div>
<div><a href="/news/news_list"><button>新聞列表</button></a></div>
<div><a href="/news/user_list"><button>作者列表</button></a></div>
<div>
<legend>新聞資訊列表</legend>
   <table id="addMessage" width="30%" border="1" align="center">
        <tr>
            <th>編號</th>
            <th>作者編號</th>
            <th>新聞標題</th>
            <th>新聞內容</th>
            <th>功能</th>
        </tr>
        <?php  
        foreach($data as $news_data){
        ?>
        <tr>
            <td><?php echo $news_data['news_id']?></td>
            <td><?php echo $news_data['user_id']?></td>
            <td><?php echo $news_data['news_title']?></td>
            <td><?php echo $news_data['news_message']?></td>
            <td><a href="/news/edit?tb=news&news_id=<?php echo $news_data['news_id']?>">修改</a> <a href="/news/del?tb=news&news_id=<?php echo $news_data['news_id'];?>">刪除</a></td>
        </tr>
        <?php  
        }
        ?>
    </table>
</div>

</body>
</html>