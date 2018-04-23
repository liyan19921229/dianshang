$(function(){
	/*商品信息与描述的切换*/
	$('#btn1').click(function(){
		var xin = $('#miaoshu').css('display');
		if (xin == 'block') {
			$('#miaoshu').css('display','none');
			$('#xinxi').css('display','block');
		}
	});

	$('#btn2').click(function(){
		var miao = $('#xinxi').css('display');
		if (miao == 'block') {
			$('#xinxi').css('display','none');
			$('#miaoshu').css('display','block');
		}
	});


	
	/*选择商品模型显示规格*/
	$('#model').change(function(){
		var con = $(this).val();

		if (con == '3') {
			$('#kuo').css('display','block');
			var content = '';
			content += '<td class="tdccc">扩展属性</td>\
					<td>\
						<table>\
							<tr>\
								<td class="tdccc">季节</td>\
								<td>\
									<input type="radio" name="" value="1">春\
									<input type="radio" name="" value="2">夏\
									<input type="radio" name="" value="3">秋\
									<input type="radio" name="" value="4">冬\
								</td>\
							</tr>\
							<tr>\
								<td class="tdccc">尺码</td>\
								<td>\
									<input type="radio" name="" value="1">XL\
									<input type="radio" name="" value="2">XXL\
									<input type="radio" name="" value="3">XXXL\
								</td>\
							</tr>\
							<tr>\
								<td class="tdccc">颜色</td>\
								<td>\
									<input type="radio" name="" value="1">红色\
									<input type="radio" name="" value="2">白色\
									<input type="radio" name="" value="3">蓝色\
									<input type="radio" name="" value="4">黑色\
								</td>\
							</tr>\
						</table>\
					</td>';
			$('#kuozhan').html(content);	
		}
		if (con == '2') {
			$('#kuo').css('display','block');
			var content = '';
			content += '<td class="tdccc">扩展属性</td>\
					<td>\
						<table>\
							<tr>\
								<td class="tdccc">季节</td>\
								<td>\
									<input type="radio" name="" value="3">秋\
									<input type="radio" name="" value="4">冬\
								</td>\
							</tr>\
							<tr>\
								<td class="tdccc">颜色</td>\
								<td>\
									<input type="radio" name="" value="3">蓝色\
									<input type="radio" name="" value="4">黑色\
								</td>\
							</tr>\
						</table>\
					</td>';
			$('#kuozhan').html(content);	
		}
		if (con == '1') {
			$('#kuo').css('display','block');
			var content = '';
			content += '<td class="tdccc">扩展属性</td>\
					<td>\
						<table>\
							<tr>\
								<td class="tdccc">季节</td>\
								<td>\
									<input type="radio" name="" value="4">冬\
								</td>\
							</tr>\
							<tr>\
								<td class="tdccc">尺码</td>\
								<td>\
									<input type="radio" name="" value="3">XXXL\
								</td>\
							</tr>\
							<tr>\
								<td class="tdccc">颜色</td>\
								<td>\
									<input type="radio" name="" value="4">黑色\
								</td>\
							</tr>\
						</table>\
					</td>';
			$('#kuozhan').html(content);	
		}
		if (con == '0') {
			var content = '';
			$('#kuo').css('display','block');
			$('#kuozhan').html(content);
		}



	});



})