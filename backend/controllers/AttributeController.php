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
		
    	$g_name = [];
    	$g_values = [];
		foreach ($guige as $k => $v) {
			$g_name[] = $v['g_name'];
			$g_values[] = explode('|', $v['g_values']);
		}
		$arr['g_name'] = $g_name;
		$arr['g_values'] = $g_values;
		// echo "<pre>";
	    // print_r($arr);
		echo json_encode($arr);

	}



}