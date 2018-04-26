<?php 
use yii\helpers\url;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

</style>
<title>新增角色</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>添加角色</em></span>
  </div>
  <form action="<?=Url::toRoute(['role/add_do'])?>" method="post">
  <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>">
  <table class="list-style">
   <tr>
    <td style="text-align:right;width:15%;" >角色名称：</td>
    <td>
     <input type="text" class="textBox" name="role_name"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;width:15%;" >是否显示：</td>
    <td>
     <input type="radio" name="role_status" value="1" />是
     <input type="radio" name="role_status" value="0" />否
    </td>
   </tr>
   <tr>
    <td style="text-align:right;width:10%;">所有权限：</td>
    <td>
        <?php 
          foreach ($nodes as $key => $val):
          if ($val['node_pid']==0) :
        ?>
          <p><b> <input type="checkbox" name="node_id[]" value="<?php echo $val['node_id']?>" /> <?php echo $val['node_name']?></b>                   
           
          <?php foreach ($nodes as $k => $v):
            if ($v['node_pid']==$val['node_id']):
          ?>                     
           | <span> <input type="checkbox" name="node_id[]" value="<?php echo $v['node_id']?>" /> <?php echo $v['node_name']?></span>       
        <?php 
          endif;endforeach 
        ?>                  
          </p> 
        <?php 
          endif;endforeach 
        ?>
    </td>
       
   </tr>
   
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" value="添加角色" class="tdBtn"/></td>
   </tr>
  </table>
  </form>
 </div>
</body>
</html>