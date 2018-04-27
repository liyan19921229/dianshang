<!DOCTYPE html>
<html>
<head>
	<title>商品添加页面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/public/style/goodsStyle.css">
	<script src="/public/js/jquery.js"></script>
	<script src="/public/js/goods.js"></script>
	<script type="text/javascript" src="/public/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/public/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="/public/ueditor/lang/zh-cn/zh-cn.js"></script>
	
</head>
<body>
<div class="goods_nav">
	<button id="btn1">商品信息</button>
	<button id="btn2">&nbsp;&nbsp;描&nbsp;&nbsp;述&nbsp;&nbsp;</button>
	<!-- <button id="btn3">&nbsp;&nbsp;属&nbsp;&nbsp;性&nbsp;&nbsp;</button> -->
</div>
<hr />

<div class="content">

	<form action="/goods/addgoods" method="post" enctype="multipart/form-data">

	<!-- 商品信息 -->
	<div id="xinxi" style="display: block;">
<input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>">
		<table border="1">
			<tr>
				<td class="tdccc">商品名称</td>
				<td><input type="text" id="name" name="goods_name" value=""></td>
			</tr>
			<tr>
				<td class="tdccc">关键词</td>
				<td><input type="text" id="key" name="keywords" value=""></td>
			</tr>
			<tr>
				<td class="tdccc">所属分类</td>
				<td>
					<select name="cate_id">
						<option value="0">请选择分类...</option>

						<?php foreach ($category as $key => $val): ?>
							<option value="<?=$val['cate_id']?>">
								<?=str_repeat('--',$val['len'])?><?=$val['cate_name']?>
							</option>							
						<?php endforeach ?>

					</select>
				</td>
			</tr>
			<tr>
				<td class="tdccc">是否上架</td>
				<td>
					<input type="radio" name="goods_status" checked value="1">是
					<input type="radio" name="goods_status" value="0">否
				</td>
			</tr>
			<tr>
				<td class="tdccc">是否热销</td>
				<td>
					<input type="radio" name="is_hot" value="0">是
					<input type="radio" name="is_hot" checked value="1">否
				</td>
			</tr>
			<tr>
				<td class="tdccc">是否新品</td>
				<td>
					<input type="radio" name="is_new" value="0">是
					<input type="radio" name="is_new" checked value="1">否
				</td>
			</tr>
			<tr>
				<td class="tdccc">是否免运费</td>
				<td>
					<input type="radio" name="is_delivery_free" value="0">是
					<input type="radio" name="is_delivery_free" checked value="1">否
				</td>
			</tr>
			<tr>
				<td class="tdccc">附属数据</td>
				<td>
					<table>
						<tr>
							<td class="tdccc">购买成功增加积分</td>
							<td class="tdccc">排序</td>
							<td class="tdccc">记件单位显示</td>
							<td class="tdccc">购买成功增加经验值</td>
						</tr>
						<tr>
							<td>
								<input class="txt" type="text" name="goods_point" value="10">
							</td>
							<td>
								<input class="txt" type="text" name="sort" value="1">
							</td>
							<td>
								<input class="txt" type="text" name="goods_unit" value="件">
							</td>
							<td>
								<input class="txt" type="text" name="exp" value="20">
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="tdccc">基本数据</td>
				<td>
					<table>
						<tr>
							<td class="tdccc">商品货号</td>
							<td class="tdccc">库存</td>
							<td class="tdccc">市场价格</td>
							<td class="tdccc">销售价格</td>
							<td class="tdccc">成本价格</td>
						</tr>
						<tr>
							<td><input class="txt" type="text" name="goods_sn" value="后台自动生成"></td>
							<td><input class="txt" type="text" name="goods_num" value="100"></td>
							<td><input class="txt" type="text" name="market_price" value="3999.00"></td>
							<td><input class="txt" type="text" name="sell_price" value="3200.00"><button>会员价格</button></td>
							<td><input class="txt" type="text" name="cost_price" value="2000"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="tdccc" >商品品牌</td>
				<td>
					<select name="brand_id">
						<option value="">请选择品牌..</option>
						<?php foreach ($brand as $br): ?>
							<option value="<?=$br['brand_id']?>"><?=$br['brand_name']?></option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="tdccc">商品相册</td>
				<td>
					<input class="txt" type="file" name="goods_image">分辨率3000px以下，大小不得超过2M
				</td>
			</tr>
		</table>
	</div>

	<!-- 产品描述 -->
	<div id="miaoshu">
		<table>
			<tr>
				<td class="tdccc">产品描述：</td>
				<td>
					<div>
					<script id="editor" type="text/plain"  style="width:700px;height:370px;"></script>
					<!-- <textarea id="desc" name="goods_desc"></textarea> -->
					</div>
				</td>
			</tr>
		</table>
	</div>


	<!-- 添加确定按钮 -->
	<div class="submit_goods">
		<span id="sub_go"><input type="submit" id="sub_no" value="添加商品"></span>
	</div>
	</form>	
</div>
<script type="text/javascript">
	// UE.getEditor('desc',{initialFrameWidth:700,initialFrameHeight:400});
	var ue = UE.getEditor('editor');
    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    ue.ready(function () {
        // 删除 路径一行
        $(".edui-editor-bottomContainer").remove();
    });
</script>
</body>

</html>