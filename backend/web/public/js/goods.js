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
		// alert(miao);
		if (miao == 'block') {
			$('#xinxi').css('display','none');
			$('#miaoshu').css('display','block');
		}
	});

	/*类型选择*/
	$('#cate_id').change(function(){
		var cate_id = $(this).val();
		// 通过分类ID查询属于此分类的属性
		$.get("/goods/getattr",{cate_id,cate_id},function(res){
			var str = '';
			str += '<tr><td class="tdccc">扩展属性</td><td><table><tr>';
			for(i in res['name']){
				str += '<td class="tdccc">'+ res['name'][i] +'</td>';
			}
			str += '</tr><tr>';
			for(j in res['value']){
				str += '<td><input type="checkbox" name="attr[]" value="'+res['value'][j]+'" />'+ res['value'][j] +'</td>';						
			}

			str += '</tr><tr><td class="tdccc">数量：</td><td><input type="number" name="attr_num" style="width:60px;" /></td><td class="tdccc">价格</td><td><input type="text" name="attr_price" style="width:60px;" /></td></tr></table></td></tr>';
			if (cate_id == '0') {
				$('#kuo').html('');
			}else{
				$('#kuo').html(str);				
			}
		},"JSON");			
	});


	/*添加图片*/
	// $('#add_img').click(function(){
	// 	$(this).before('<input type="file" name="goods_img[]" />');
	// });






});
