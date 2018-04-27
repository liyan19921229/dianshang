<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>商品回收站</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>商品回收站</em></span>
  </div>
  
  <table class="list-style">
   <tr>
    <th>ID编号</th>
    <th>产品</th>
    <th>名称</th>
    <th>删除时间</th>
    <th>操作</th>
   </tr>
   <?php foreach ($delgoods as $v): ?>
     <tr>
    <td>
     <span>
     <input type="checkbox" class="middle children-checkbox"/>
     <i><?=$v['goods_id']?></i>
     </span>
    </td>
    <td class="center pic-area"><img src="/<?=$v['goods_image']?>" class="thumbnail"/></td>
    <td class="td-name">
      <span class="ellipsis td-name block"><?=$v['goods_name']?></span>
    </td>
    <td class="center">
      <span><?=$v['del_time']?></span>
    </td>
    <td class="center">
     <a href="/goods/binset?id=<?=$v['goods_id']?>" title="恢复">恢复</a>
     <a href="#" title="彻底删除">彻底删除</a>
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
	   <input type="button" value="批量彻底删除" class="btnStyle"/>
	   <input type="button" value="批量恢复" class="btnStyle"/>
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