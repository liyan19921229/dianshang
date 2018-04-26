<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品分类</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>产品分类</em></span>
    <span class="modular fr"><a href="/category/addcate" class="pt-link-btn">+添加新分类</a></span>
  </div>
  
  <table class="list-style">
   <tr>
    <th><input type="checkbox"/></th>
    <th>分类id</th>
    <th>分类名称</th>
    <th>分类等级</th>
    <th>操作</th>
   </tr>
   <?php foreach($data as $key=>$val){ ?>
   <tr>
    <td class="center"><input type="checkbox"/></td>
    <td class="center"><?php echo $val['cate_id']?></td>
    <td class="center"><?php echo $val['cate_name']?></td>
    <td class="center"><?php echo $val['cate_pid']?></td>
    <td class="center"><a href="/category/delete?id=<?php echo $val['cate_id']?>">删除</a>|<a href="/category/update?id=<?php echo $val['cate_id']?>">修改</a></td>
   </tr>
   <?php }?>
  </table>
  
  <!-- BatchOperation -->
  <div style="overflow:hidden;">
      <!-- Operation -->
	  <div class="BatchOperation fl">
	   <input type="checkbox" id="del"/>
	   <label for="del" class="btnStyle middle">全选</label>
	   <input type="button" value="批量删除" class="btnStyle"/>
	  </div>
	  <!-- turn page -->
	  <div class="turnPage center fr">
	   <a>第一页</a>
	   <a>1</a>
	   <a>最后一页</a>
	  </div>
  </div>
 </div>
</body>
</html>