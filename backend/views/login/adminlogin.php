<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="nofollow"/>
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
<style>
body{width:100%;height:100%;overflow:hidden;background:url(/public/images/pc_loginBg.jpg) no-repeat;background-size:cover;position:absolute;}
</style>
<script src="/public/js/jquery.js"></script>
<script src="/public/js/Particleground.js"></script>
<script>
// $(document).ready(function() {
//   $('body').particleground({
//     dotColor:'green',
//     lineColor:'#c9ec6e'
//   });
//   $('.intro').css({
//     'margin-top': -($('.intro').height() /2)
//   });
//   $(".loginform input[type='button']").click(function(){
// 	  alert("登陆成功，程序对接时将其删除，此处测试！");
// 	  location.href="/index/index";
// 	  });
// });
</script>

</head>
<body>
  <section class="loginform">
   <form action="/login/adminlogin" method="post">
    <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>"/>
   <h1>后台管理系统</h1>
   <ul>
    <li>
     <label>账号：</label>
     <input type="text" name="admin_name" class="textBox" placeholder="管理员账号"/>
    </li>
    <li>
     <label>密码：</label>
     <input type="password" name="admin_pwd" class="textBox" placeholder="登陆密码"/>
    </li>
    <li>
     <input type="submit" value="立即登陆"/>
    </li>
   </ul>
 </form>
  </section>
</body>
</html>