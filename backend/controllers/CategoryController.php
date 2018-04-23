<?php
namespace backend\controllers;

use backend\common\BaseController;

/**
* 分类的管理
*/
class CategoryController extends BaseController{

	/*分类列表*/
	public function actionCatelist(){
		return $this->render('catelist');
	}


	/*分类添加*/
	public function actionAddcate(){
		return $this->render('addcate');
	}


	/*删除分类*/
	public function actionDelcate(){
		return "删除商品";
	}


	/*修改分类*/
	public function actionUpcate(){
		return $this->render('Upcate');
	}




}