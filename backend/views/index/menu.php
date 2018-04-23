<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>左侧导航</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
<script src="/public/js/jquery.js"></script>
<script src="/public/js/public.js"></script>
</head>
<body style="background:#313131">
<div class="menu-list">
 <a href="/index/main" target="mainCont" class="block menu-list-title center" style="border:none;margin-bottom:8px;color:#fff;">起始页</a>
 <ul>
  <li class="menu-list-title">
   <span>订单管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="/order/orderlist" title="订单列表" target="mainCont">订单列表</a></li>
   </ul>
  </li>
 
  <li class="menu-list-title">
   <span>商品管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="/goods/goodslist" title="商品列表" target="mainCont">商品列表</a></li>
    <li><a href="/goods/addgoods" title="添加商品" target="mainCont">添加商品</a></li>
    <li><a href="/category/catelist" title="分类列表" target="mainCont">分类列表</a></li>
    <li><a href="/category/addcate" title="分类添加" target="mainCont">分类添加</a></li>
    <li><a href="/brand/brandlist" title="品牌列表" target="mainCont">品牌列表</a></li>
    <li><a href="/brand/addbrand" title="品牌添加" target="mainCont">品牌添加</a></li>
    <li><a href="/goods/bin" title="商品回收站" target="mainCont">商品回收站</a></li>
   </ul>
  </li>
  
  <li class="menu-list-title">
   <span>会员管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="/user/list" title="会员列表" target="mainCont">会员列表</a></li>
    <li><a href="/user/adduser" title="添加会员" target="mainCont">添加会员</a></li>
    <li><a href="/user/rank" title="会员等级" target="mainCont">会员等级</a></li>
    <li><a href="/user/message" title="会员留言" target="mainCont">会员留言</a></li>
   </ul>
  </li>

  <li class="menu-list-title">
   <span>权限管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="/node/lists" title="站点基本设置" target="mainCont">权限列表</a></li>
    <li><a href="/node/add" title="站点基本设置" target="mainCont">权限添加</a></li>
   </ul>
  </li>
    
  <li class="menu-list-title">
   <span>角色管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="basic_settings.html" title="站点基本设置" target="mainCont">角色列表</a></li>
    <li><a href="admin_list.html" title="站点基本设置" target="mainCont">角色添加</a></li>
   </ul>
  </li>

    <li class="menu-list-title">
   <span>收货管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="/collect/collectlist" title="收货列表" target="mainCont">收货列表</a></li>
   </ul>
  </li>

    <li class="menu-list-title">
   <span>支付管理</span>
   <i>◢</i>
  </li>
  <li>
   <ul class="menu-children">
    <li><a href="/order/list" title="支付宝" target="mainCont">支付宝</a></li>
    <li><a href="/order/list" title="微信" target="mainCont">微信</a></li>
    <li><a href="/order/list" title="银联" target="mainCont">银联</a></li>
   </ul>
  </li>
    
 </ul>
</div>
</body>
</html>