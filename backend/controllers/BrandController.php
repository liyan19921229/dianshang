<?php
namespace backend\controllers;

use backend\common\BaseController;

/**
* 商品的管理
*/
class BrandController extends BaseController{
	

	/*品牌列表*/
	public function actionBrandlist(){
		return $this->render('brandlist');
	}


	/*添加品牌*/
	public function actionAddbrand(){
		return $this->render('addbrand');
	}


	/*删除品牌*/
	public function actionDelbrand(){
		return "删除品牌";
	}


	/*修改品牌*/
	public function actionUpbrand(){
		return "修改品牌";

	}



}