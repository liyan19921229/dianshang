<?php
namespace backend\controllers;

use backend\common\BaseController;

/**
* 商品的管理
*/
class GoodsController extends BaseController{
	

	/*商品列表*/
	public function actionGoodslist(){
		return $this->render('goodslist');
	}


	/*添加商品*/
	public function actionAddgoods(){
		return $this->render('addgoods');
	}


	/*删除商品*/
	public function actionDelgoods(){
		return "我是删除商品";
	}


	/*修改商品*/
	public function actionUpgoods(){
		return "我是修改商品";

	}


	/*商品回收站*/
	public function actionBin(){
		return $this->render('bin');
	}



}