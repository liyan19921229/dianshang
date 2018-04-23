<!DOCTYPE html>
<html>
<head>
	<title>商品添加页面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/public/style/goodsStyle.css">
	<script type="text/javascript" charset="utf-8" src="/public/utf8-php/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="/public/utf8-php/ueditor.all.js"></script>
	<script src="/public/js/jquery.js"></script>
	<script src="/public/js/goods.js"></script>
	
</head>
<body>
<div class="goods_nav">
	<button id="btn1">商品信息</button>
	<button id="btn2">描述</button>
	<!-- <button id="btn3">营销选择</button> -->
</div>
<hr />

<div class="content">

	<!-- 商品信息 -->
	<div id="xinxi" style="display: block;">
		<table border="1">
			<tr>
				<td class="tdccc">商品名称</td>
				<td><input type="text" name="" value=""></td>
			</tr>
			<tr>
				<td class="tdccc">关键词</td>
				<td><input type="text" name="" value=""></td>
			</tr>
			<tr>
				<td class="tdccc">所属分类</td>
				<td>
					<select name="">
						<option value="">手机</option>
						<option value="">手机</option>
						<option value="">手机</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="tdccc">是否上架</td>
				<td>
					<input type="radio" name="" value="1">是
					<input type="radio" name="" value="1">否
				</td>
			</tr>
			<tr>
				<td class="tdccc">是否共享</td>
				<td>
					<input type="radio" name="" value="1">是
					<input type="radio" name="" value="1">否
				</td>
			</tr>
			<tr>
				<td class="tdccc">是否免运费</td>
				<td>
					<input type="radio" name="" value="1">是
					<input type="radio" name="" value="1">否
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
							<td><input class="txt" type="text" name="" value="10"></td>
							<td><input class="txt" type="text" name="" value="5"></td>
							<td><input class="txt" type="text" name="" value="件"></td>
							<td><input class="txt" type="text" name="" value="20"></td>
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
							<td class="tdccc">重量(克)</td>
						</tr>
						<tr>
							<td><input class="txt" type="text" name="" value="2843274623"></td>
							<td><input class="txt" type="text" name="" value="100"></td>
							<td><input class="txt" type="text" name="" value="3999.00"></td>
							<td><input class="txt" type="text" name="" value="3200.00"><button>会员价格</button></td>
							<td><input class="txt" type="text" name="" value="2000"></td>
							<td><input class="txt" type="text" name="" value="200"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="tdccc">商品模型</td>
				<td>
					<select name="" id="model">
						<option value="0">请选择...</option>
						<option value="1">手机</option>
						<option value="2">电脑</option>
						<option value="3">鞋帽</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="tdccc">规格</td>
				<td>
					<select name="">
						<option value="0">请选择...</option>
						<option value="">服饰</option>
						<option value="">手机</option>
						<option value="">电器</option>
					</select>
				</td>
			</tr>

			<!-- 隐藏的选项 -->
				<tr id="kuo">
					<tbody id="kuozhan">
								
					</tbody>					
				</tr>

			<tr>
				<td class="tdccc">商品推荐类型</td>
				<td>
					<input type="checkbox" name="" value="">最新商品
					<input type="checkbox" name="" value="">特价商品
					<input type="checkbox" name="" value="">热卖商品
					<input type="checkbox" name="" value="">推荐商品
				</td>
			</tr>
			<tr>
				<td class="tdccc">商品品牌</td>
				<td>
					<select name="">
						<option value="0">请选择...</option>
						<option value="1">海澜之家</option>
						<option value="2">华为</option>
						<option value="3">戴尔</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="tdccc">商品相册</td>
				<td>
					<input class="txt" type="file" name="">可以上传多张图片，分辨率3000px以下，大小不得超过2M
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
					<textarea id="content"></textarea>
				</td>
			</tr>
		</table>
	</div>

<!-- 添加确定按钮 -->
	<div class="submit_goods">
		<span id="sub_go"><input type="submit" name="" value="添加商品"></span>
	</div>
</div>

</body>
<script type="text/javascript">
	UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:300})
</script>
</html>