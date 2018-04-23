<?php
namespace frontend\controllers;

use app\common\BaseController;

class ProductController extends BaseController{
	public function actionProduct(){
		return $this->render('product');
	}
}