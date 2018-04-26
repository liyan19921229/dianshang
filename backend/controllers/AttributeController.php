<?php
namespace backend\controllers;

use backend\common\BaseController;
use common\models\Attribute;
use common\models\Guige;

/**
* 商品属性控制
*/
class AttributeController extends BaseController
{
	
	

	// 获取商品的类型的属性
	public function actionGetattr(){
		header("content-type:text/html;charset=utf-8");
		$type_id = $this->get('type_id');
		if($type_id == 0 || empty($type_id)){
			return false;
		}
		$attr = Attribute::find()->select('attr_id,attr_name')->where(['type_id'=>$type_id])->asArray()->all();
		$attr_ids = [];
		$attr_name = [];
		foreach ($attr as $key => $val) {
			$attr_ids[] = $val['attr_id'];
			$attr_name[] = $val['attr_name']; 
		}

    	$guige = Guige::find()->select(['g_name','g_values'])->where(['attr_id'=>$attr_ids])->asArray()->all();
		
		$arr = [
			[
				'g_name'=>'内存',
				'g_values'=>'64G|128G'
			],
			[
				'g_name'=>'颜色',
				'g_values'=>'红色|粉色|黑色'
			]
		];

		echo "<pre>";
    print_r($arr);die;
	    // $aa = [];
	    // echo "<table border='1'><tr><td>扩展属性</td><td><table>";
	    // foreach ($guige as $key => $value) {
	    // 	$aa[] = explode('|', $value['g_values']);
	    // 	echo "<tr><td>".$value['g_name']."</td>";
	    // 	foreach ($aa as $k => $val) {
	    // 		for($i=0; $i< count($aa); $i++){
	    // 			echo $val[1];

	    // 		// 	echo "<td>".$val[$i]."</td></tr>";
	    // 		}	
	    // 	}
	    // 	// echo"";
	    	
	    // }

	    // echo "</table></td></tr></table>";
		
		// echo "<pre>";
    // print_r($aa);


	    die;
    	$g_name = [];
    	$g_values = [];
		foreach ($guige as $k => $v) {
			$g_name[] = $v['g_name'];
			$g_name[][] = $v['g_values'][$k];
			// $g_values[] = $v['g_values'];
		}
		$arr['g_name'] = $g_name;
		$arr['g_values'] = $g_values;
		echo "<pre>";
	    print_r($arr);
		// echo json_encode($arr);

	}



}