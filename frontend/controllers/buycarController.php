<?php
namespace frontend\controllers;

use app\common\BaseController;

class BuycarController extends BaseController{
	//取消框架样式
	// public $layout = false;
	public $enableCsrfValidation=false;


	public function actionBuycar(){
		return $this->render('buycar');
	}

	public function actionBuycar_two(){
		return $this->render('buycar_two');
	}

	public function actionBuycar_three(){
		return $this->render('buycar_three');
	}
}