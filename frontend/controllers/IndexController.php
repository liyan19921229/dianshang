<?php
namespace frontend\controllers;

use app\common\BaseController;

class IndexController extends BaseController{
	

	public function actionIndex(){
		
		return $this->render('index');
	}
}