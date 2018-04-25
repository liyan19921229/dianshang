<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>新增产品类型</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/public/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>添加类型</em></span>
  </div>
  <form action="/type/typecate_add" method="post">
  <table class="list-style">
    <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>"/>
   <tr>
    <td style="text-align:right;width:15%;">类型名称：</td>
    <td>
     <input type="text" name="type_name" class="textBox"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" value="提交" class="tdBtn"/></td>
   </tr> 
  </table>
  </form>
 </div>
</body>
</html>