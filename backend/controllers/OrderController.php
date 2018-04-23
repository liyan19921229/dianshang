<?php
namespace backend\controllers;

use backend\common\BaseController;

/**
* 订单控制器
*/
class OrderController extends BaseController{
	

	/*订单列表*/
	public function actionOrderlist(){
		return $this->render('orderlist');
	}


	/*订单详情*/
	public function actionDetail(){
		return $this->render('detail');
	}


}