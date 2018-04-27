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


	$('#sub_no').click(function(){

		$('#sub_no').css('disabled','true');


	});


});
