﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <th>分类名称</th>
    <th>产品数量</th>
    <th>单位</th>
    <th>是否显示</th>
    <th>排序</th>
    <th>操作</th>
   </tr>
   <tr>
    <td>
     <input type="checkbox"/>
     <span>西餐</span>
    </td>
    <td class="center">1</td>
    <td class="center">盘</td>
    <td class="center"><img src="/public/images/yes.gif"/></td>
    <td class="center"><input type="text" value="0" style="width:50px;text-align:center;"/></td>
    <td class="center"><a class="block" title="移除"><img src="/public/images/icon_trash.gif"/></a></td>
   </tr>
   <tr>
    <td style="text-indent:2em;">
     <input type="checkbox"/>
     <span>面包</span>
    </td>
    <td class="center">3</td>
    <td class="center">盘</td>
    <td class="center"><img src="/public/images/no.gif"/></td>
    <td class="center"><input type="text" value="0" style="width:50px;text-align:center;"/></td>
    <td class="center"><a class="block" title="移除"><img src="/public/images/icon_trash.gif"/></a></td>
   </tr>
   
   <tr>
    <td>
     <input type="checkbox"/>
     <span>西餐</span>
    </td>
    <td class="center">1</td>
    <td class="center">盘</td>
    <td class="center"><img src="/public/images/yes.gif"/></td>
    <td class="center"><input type="text" value="0" style="width:50px;text-align:center;"/></td>
    <td class="center"><a class="block" title="移除"><img src="/public/images/icon_trash.gif"/></a></td>
   </tr>
   <tr>
    <td style="text-indent:2em;">
     <input type="checkbox"/>
     <span>面包</span>
    </td>
    <td class="center">3</td>
    <td class="center">盘</td>
    <td class="center"><img src="/public/images/no.gif"/></td>
    <td class="center"><input type="text" value="0" style="width:50px;text-align:center;"/></td>
    <td class="center"><a class="block" title="移除"><img src="/public/images/icon_trash.gif"/></a></td>
   </tr>
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