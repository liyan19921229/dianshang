<?php 
use yii\helpers\url;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

</style>
<title>新增管理员</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>添加管理员</em></span>
  </div>
  <form action="<?=Url::toRoute(['admin/add_do'])?>" method="post">
  <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>">
  <table class="list-style">
   <tr>
    <td style="text-align:right;width:15%;" >管理员名称：</td>
    <td>
     <input type="text" class="textBox" name="admin_name"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;width:15%;" >管理员密码：</td>
    <td>
     <input type="text" class="textBox" name="admin_pwd"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;width:10%;">所有角色：</td>
    <td>
        <?php 
          foreach ($role as $key => $val):
        ?>
          <input type="checkbox" name="role_id[]" value="<?php echo $val['role_id']?>" /> <?php echo $val['role_name']?> 
        <?php 
          endforeach 
        ?>
    </td>
       
   </tr>
   
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" value="添加管理员" class="tdBtn"/></td>
   </tr>
  </table>
  </form>
 </div>
</body>
</html>