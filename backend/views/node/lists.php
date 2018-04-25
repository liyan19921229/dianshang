<?php 
use yii\helpers\url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>权限分类</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>权限</em></span>
    <span class="modular fr"><a href="/brand/addbrand" class="pt-link-btn">+添加权限</a></span>
  </div>
  
  <table class="list-style">
  <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>">
   <tr>
    <th>权限名称</th>
    <th>控制器</th>
    <th>方法</th>
    <th>是否显示</th>
    <th>操作</th>
   </tr>
  <?php foreach ($nodes as $key => $val): ?>
   <tr>
       <td><?php echo str_repeat("△△△",$val['lev'])?><?php echo $val['node_name']?></td>
       <td><?php echo $val['node_controller']?></td>
       <td><?php echo $val['node_action']?></td>
       <td>
       <?php
       if ($val['node_status']==1) {
          echo "是";
        }elseif ($val['node_status']==0) {
          echo "否";
        } 
        ?>
       </td>
       <td>
          <a href="/node/delete?id=<?php echo $val['node_id']?>">删除</a>
          <a href="/node/update?id=<?php echo $val['node_id']?>">修改</a>
        </td>
   </tr>
  <?php endforeach ?>
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