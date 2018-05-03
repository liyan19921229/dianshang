<?php
namespace backend\controllers;

use backend\common\BaseController;


/**
* 后台首页
*/
class IndexController extends CommonController{
	
	/**
	* 展示首页
	*/
	public function actionIndex(){
		return $this->render('index');
	}

	/*背景样式*/
	public function actionBar(){
		return $this->render('bar');
	}

	/*左侧菜单栏*/
	public function actionMenu(){
		return $this->render('menu');
	}

	/*右侧中部内容*/
	public function actionMain(){
		return $this->render('main');
	}


	/*顶部导航*/
	public function actionTop(){
		return $this->render('top');
	}



}