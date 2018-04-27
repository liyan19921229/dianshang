﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理员列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
<script src="/public/js/jquery.js"></script>
<script src="/public/js/public.js"></script>
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="user"></i><em>管理员列表</em></span>
    <span class="modular fr"><a href="revise_password.html" class="pt-link-btn">+添加管理员</a></span>
  </div>
  <table class="list-style Interlaced">
   <tr>
    <th>管理员账号</th>
    <th>电子邮箱地址</th>
    <th>最后登录时间</th>
    <th>操作</th>
   </tr>

     <tr>
      <td><?=$info['admin_name']?></td>
      <td><?=$info['admin_name']?>@sina.cn</td>
      <td class="center"><?=$info['time']?></td>
      <td class="center">
       <a href="revise_password.html"><img src="images/icon_edit.gif"/></a>
       <a><img src="images/icon_drop.gif"/></a>
      </td>
     </tr>
   
  </table>
 </div>
</body>
</html>