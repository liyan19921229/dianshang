<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>新增产品分类</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>添加品牌</em></span>
  </div>
<form action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>"> 
  <table class="list-style">
   <tr>
    <td style="text-align:right;width:15%;">品牌名称：</td>
    <td>
     <input type="text" class="textBox" name="brand_name" />
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">网址：</td>
    <td>
     <input type="text" class="textBox length-short" name="brand_url" />
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">排序：</td>
    <td>
     <input type="number" class="textBox length-short" name="sort" />
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">LOGO：</td>
    <td>
      <input type="file" name="brand_logo">
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">所属分类：</td>
    <td>
     <select name="type_id">
       <option value="">请选择</option>
       <?php foreach ($type as $val): ?>
         <option value="<?=$val['type_id']?>"><?=$val['type_name']?></option>
       <?php endforeach ?>
     </select>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">品牌描述：</td>
    <td>
     <textarea class="textarea" name="brand_desc"></textarea>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" value="保存" class="tdBtn"/></td>
   </tr>
  </table>
</form>  
 </div>
</body>
</html>