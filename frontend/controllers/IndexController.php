<?php
namespace frontend\controllers;

use app\common\BaseController;

class IndexController extends BaseController{
	

	public function actionIndex(){
		$session=$this->getSession("user");
		// print_r($session);		
		return $this->render('index');
	}
}