<?php 
use yii\helpers\url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <!--[if IE 6]>
    <script src="/public/js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript" src="/public/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/public/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript" src="/public/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/public/js/menu.js"></script>    
        
	<script type="text/javascript" src="/public/js/select.js"></script>
    
	<script type="text/javascript" src="/public/js/lrscroll.js"></script>
    
    <script type="text/javascript" src="/public/js/iban.js"></script>
    <script type="text/javascript" src="/public/js/fban.js"></script>
    <script type="text/javascript" src="/public/js/f_ban.js"></script>
    <script type="text/javascript" src="/public/js/mban.js"></script>
    <script type="text/javascript" src="/public/js/bban.js"></script>
    <script type="text/javascript" src="/public/js/hban.js"></script>
    <script type="text/javascript" src="/public/js/tban.js"></script>
    
	<script type="text/javascript" src="/public/js/lrscroll_1.js"></script>
    
    
<title>尤洪</title>
</head>
<body>  
<!--Begin Header Begin-->
<div class="soubg">
	<div class="sou">
        <span class="fr">
        	<span class="fl">你好，请<a href="index.php?r=login/login">登录</a>&nbsp; <a href="index.php?r=login/login" style="color:#ff4e00;">免费注册</a>&nbsp; </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/public/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<!--End Header End--> 
<!--Begin Login Begin-->
<div class="log_bg">	
    <div class="top">
        <div class="logo"><a href="Index.html"><img src="/public/images/logo.png" /></a></div>
    </div>
	<div class="regist">
    	<div class="log_img"><img src="/public/images/l_img.png" width="611" height="425" /></div>
		<div class="reg_c">
        	<form action="<?=Url::toRoute(['regist/add_do'])?>" method="post">
          <!-- 默认开启csrf攻击 -->
          <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>">
            <table border="0" style="width:420px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="95">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:24px;">注册</span>
                    <span class="fr">已有商城账号，<a href="/login/login" style="color:#ff4e00;">我要登录</a></span>
                </td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;用户名 &nbsp;</td>
                <td><input type="text" name="user_name" value="" class="l_user" id="user_name" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                <td><input type="password" value="" name="user_pwd" class="l_pwd" id="user_pwd" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                <td><input type="password" value="" name="user_repwd" class="l_pwd" id="user_repwd" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;邮箱 &nbsp;</td>
                <td><input type="text" name="user_email" value="" class="l_email" id="user_email" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;手机 &nbsp;</td>
                <td><input type="text" value="" name="user_tel" class="l_tel" id="user_tel" /></td>
              </tr>
              <tr>
              	<td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    	<label class="r_rad"><input type="checkbox" /></label><label class="r_txt">我已阅读并接受《用户协议》</label>
                    </span>
                </td>
              </tr>
              <tr height="60">
              	<td>&nbsp;</td>
                <td><input type="submit"  value="立即注册" class="log_btn" id="log_btn"/></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!--End Login End--> 
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
        <img src="/public/images/b_1.gif" width="98" height="33" /><img src="/public/images/b_2.gif" width="98" height="33" /><img src="/public/images/b_3.gif" width="98" height="33" /><img src="/public/images/b_4.gif" width="98" height="33" /><img src="/public/images/b_5.gif" width="98" height="33" /><img src="/public/images/b_6.gif" width="98" height="33" />
    </div>    	
</div>
<!--End Footer End -->    

</body>


<!--[if IE 6]>
<script src="/public///letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>
<script>
    $('#log_btn').click(function(){
      var user_name=$("#user_name").val();
      var user_pwd=$("#user_pwd").val();
      var user_repwd=$("#user_repwd").val();
      var user_email=$("#user_email").val();
      var user_tel=$("#user_tel").val();

      if (user_name=="") {
        alert("用户名不能为空");
        return false;
      }

      if (user_pwd=="") {
        alert("密码不能为空");
        return false;
      }

      if (user_repwd=="") {
        alert("重复密码不能为空");
        return false;
      }

      if (user_pwd!=user_repwd) {
        alert("重复密码必须和密码一致");
        return false;
      }

      // var email=/^\w+@\w+(\.)+com$/;
      // var stremail=email.test(user_email);
      // if(stremail){  
      //    return true;  
      // }else{  
      //    alert("邮箱格式不正确");
      //    return false; 
      // } 
      if (user_email=="") {
        alert("邮箱不能为空");
        return false;
      }

    // 验证手机格式13/15/18开头，11位
      var pattern=/^1[3,5,8]\d{9}$/;
      var strPhone=pattern.test(user_tel);  
      if(strPhone){  
         return true;  
      }else{  
         alert("手机格式不正确");
         return false; 
      } 
       //手机号非空验证 
      if (user_tel=="") {
        alert("联系方式不能为空");
        return false;
      }

    })

</script>