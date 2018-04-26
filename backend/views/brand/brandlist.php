<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品分类</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>产品品牌</em></span>
    <span class="modular fr"><a href="/brand/addbrand" class="pt-link-btn">+添加新品牌</a></span>
  </div>
  
  <table class="list-style">
   <tr>
    <th>类型名称</th>
    <th>品牌ID</th>
    <th>品牌名称</th>
    <th>品牌LOGO</th>
    <th>品牌网址</th>
    <th>品牌描述</th>
    <th>排序</th>
    <th>操作</th>
   </tr>
   <?php foreach ($brand as $val): ?>
     <tr>
       <td>
         <input type="checkbox"/>
         <span><?=$val['type']['type_name']?></span>
      </td>
      <td class="center"><?=$val['brand_id']?></td>
      <td class="center"><?=$val['brand_name']?></td>
      <td class="center"><img src="/<?=$val['brand_logo']?>" width="50" height="50"></td>
      <td class="center"><?=$val['brand_url']?></td>
      <td class="center"><?=$val['brand_desc']?></td>
      <td class="center">
        <input type="text" id="sort_a" value="<?=$val['sort']?>" style="width:50px;text-align:center;"/>
      </td>
      <td class="center">
        <a class="block" title="移除" href="/brand/delbrand?id=<?=$val['brand_id']?>"><img src="/public/images/icon_trash.gif"/></a>
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
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script>
  $(document).on('focusout','#sort_a',function(){
   var num = $(this).val();
   var brand_id = $(this).parent().parent().children().eq(1).html();
   // alert(brand_id);
   $.get('/brand/upbrand',{brand_id:brand_id,num:num},function(result){
      // if (result.data == num) {
      //   return false;
      // }
      if (result.code == 0) {
        alert(result.msg);
        return false;
      }
      if (result.code == 1) {
        alert(result.msg);
      }
      // $('#sort_a').val(result.data);
   },'JSON');
    


  });
</script>
</html>