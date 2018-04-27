<?php
namespace backend\controllers;

use common\models\Category;

use backend\common\BaseController;

/**
* 商品属性的管理
*/
class AttributeController extends BaseController{
	public function actionAttribute_add(){
		if ($this->isGet()) {
			return $this->render('attribute_add');			
		}else{
    		var_dump($_POST);
		}
	}

	public function actionAttribute_lists(){
		return $this->render('attribute_lists');
	}
}	