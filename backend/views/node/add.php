<?php 
use yii\helpers\url;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>新增权限</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>添加权限</em></span>
  </div>
  <form action="<?=Url::toRoute(['node/add_do'])?>" method="post">
  <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>">
  <table class="list-style">
   <tr>
    <td style="text-align:right;width:15%;" >权限名称：</td>
    <td>
     <input type="text" class="textBox" name="node_name"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;width:15%;" >控制器：</td>
    <td>
     <input type="text" class="textBox" name="node_controller"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;width:15%;" >方法名：</td>
    <td>
     <input type="text" class="textBox"  name="node_action"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">是否显示：</td>
    <td>
     <input type="radio" name="node_status" value="1" />
     <label for="yes">是</label>
     <input type="radio" name="node_status" value="0" />
     <label for="no">否</label>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;width:10%;">所属权限：</td>
    <td>
     <select class="textBox" name="node_pid" >
      <option value="0">顶级分类</option>
      <?php foreach ($nodes as $key => $val): ?>
        <option value=<?php echo $val['node_id']?>><?php echo str_repeat("————",$val['lev']) ?><?php echo  $val['node_name']?></option>
      <?php endforeach ?>
      
     </select>
    </td>
   </tr>
   
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" value="添加权限" class="tdBtn"/></td>
   </tr>
  </table>
  </form>
 </div>
</body>
</html>