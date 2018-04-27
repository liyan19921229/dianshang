<?php
namespace frontend\controllers;

use app\common\BaseController;

/**
* 商品详情
*/
class ProductController extends BaseController{
	public function actionProduct(){
		return $this->render('product');
	}
}