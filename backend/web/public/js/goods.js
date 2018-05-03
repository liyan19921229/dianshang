$(function(){
	/*商品信息与描述的切换*/
	$('#btn1').click(function(){
		var xin = $('#miaoshu').css('display');
		if (xin == 'block') {
			$('#miaoshu').css('display','none');
			$('#shuxing').css('display','none');
			$('#xinxi').css('display','block');
		}
	});

	$('#btn2').click(function(){
		var miao = $('#xinxi').css('display');
		// alert(miao);
		if (miao == 'block') {
			$('#xinxi').css('display','none');
			$('#shuxing').css('display','none');
			$('#miaoshu').css('display','block');
		}
	});

	/*类型选择*/
	$('#cate_id').change(function(){
		var cate_id = $(this).val();
		alert(cate_id);
	});






});
