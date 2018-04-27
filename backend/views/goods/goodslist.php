<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
<script src="/public/js/jquery.js"></script>
<script src="/public/js/public.js"></script>
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>产品列表</em></span>
    <span class="modular fr"><a href="/goods/addgoods" class="pt-link-btn">+添加商品</a></span>
  </div>
  <div class="operate">
   <form>
    <input type="text" class="textBox length-long" placeholder="输入产品名称..."/>
    <input type="button" value="查询" class="tdBtn"/>
   </form>
  </div>
  <table class="list-style Interlaced">
   <tr>
    <th>ID编号</th>
    <th>产品</th>
    <th>名称</th>
    <th>市场价</th>
    <th>会员价</th>
    <th>库存</th>
    <th>上下架</th>
    <th>新品</th>
    <th>热销</th>
    <th>运费</th>
    <th>操作</th>
   </tr>
   <?php foreach ($goods as $key => $v): ?>
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
       <span>
        <i>￥</i>
        <em><?=$v['market_price']?></em>
       </span>
      </td>
      <td class="center">
       <span>
        <i>￥</i>
        <em><?=$v['sell_price']?></em>
       </span>
      </td>
      <td class="center">
       <span>
        <em><?=$v['goods_num']?></em>
        <i><?=$v['goods_unit']?></i>
       </span>
      </td>
      <td class="center">
        <?php if ($v['goods_status'] == '1'): ?>
          <a href="/goods/upsta?id=<?=$v['goods_id']?>"><b>已上架</b></a>
        <?php else :?>
          <a href="/goods/upsta?id=<?=$v['goods_id']?>">已下架</a> 
        <?php endif ?>
      </td>
      <td class="center">
        <?php if ($v['is_new'] == '1'): ?>
          <img src="/public/images/yes.gif"/>
        <?php else :?>
          <img src="/public/images/no.gif"/>
        <?php endif ?>
      </td>
      <td class="center">
        <?php if ($v['is_hot'] == '1'): ?>
          <img src="/public/images/yes.gif"/>
        <?php else :?>
          <img src="/public/images/no.gif"/>
        <?php endif ?>
      </td>
      <td class="center">
        <?php if ($v['is_delivery_free'] == '1'): ?>
          免运费
        <?php else :?>
          运费：10元
        <?php endif ?>
      </td>
      <td class="center">
       <a href="http://www.baidu.com/跳转至前台页面哦" title="查看" target="_blank"><img src="/public/images/icon_view.gif"/></a>
       <a href="edit_product.html" title="编辑"><img src="/public/images/icon_edit.gif"/></a>
       <a title="删除" href="/goods/delgoods?goods_id=<?=$v['goods_id']?>"><img src="/public/images/icon_drop.gif"/></a>
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