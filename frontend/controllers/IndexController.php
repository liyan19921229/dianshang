<?php
namespace frontend\controllers;

use app\common\BaseController;
use app\models\Nav;
use app\models\Category;
class IndexController extends BaseController{
	

	public function actionIndex(){
		$session=$this->getSession("user");	
		//获取导航内容
		$dataNav = Nav::find()->asArray()->orderby('sort')->where(['is_show'=>0])->all();
		//获取分类展示内容
		$dataCate = Category::find()->asArray()->all();	
		$ordercate=$this->getTree($dataCate);
		// echo "<pre>";
		// print_r($ordercate);
		return $this->render('index',['dataNav'=>$dataNav,'ordercate'=>$ordercate]);
	}
}