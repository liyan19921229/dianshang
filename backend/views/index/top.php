<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>header</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header">
 <div class="logo">
  <img src="/public/images/admin_logo.png" title="在哪儿"/>
 </div>
 <div class="fr top-link">
 <?php
          $session = Yii::$app->session;
          $session=$session->get('info');
          if (isset($session)) {
            echo "<i class='adminIcon'></i><span>欢迎".$session['admin_name']."登录</span>";
          }else{
            echo '<i class="adminIcon"></i><span>管理员:</span>';
          }
?>

 <!--  <i class="adminIcon"></i><span>管理员:</span> -->
  <a href="" title="修改密码"></a>
  <a href="/login/uppwd" target="mainCont" title="修改密码"><i class="revisepwdIcon"></i><span>修改密码</span></a>
  <a href="/login/adminlogout" title="安全退出" style="background:rgb(60,60,60);"><i class="quitIcon"></i><span>安全退出</span></a>
 </div>
</div>
</body>
</html>