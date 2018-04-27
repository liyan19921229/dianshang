<?php
namespace frontend\controllers;

use app\common\BaseController;

/**
* 管理中心控制器
*/
class MemberController extends BaseController
{
	

	/*我的订单中心首页*/
	public function actionMember(){
		if (empty($this->getSession('user'))) {
			return $this->alert('请先登录','/login/login');
		}
		return $this->render('member');
	}


	/*我的订单*/
	public function actionOrder(){

		return $this->render('order');
	}


	/*收货地址*/
	public function actionAddress(){

		return $this->render('address');
	}


	/*收货地址*/
	public function actionUser(){

		return $this->render('user');
	}


	/*收货地址*/
	public function actionCollect(){

		return $this->render('collect');
	}


	/*收货地址*/
	public function actionMsg(){

		return $this->render('msg');
	}


	/*收货地址*/
	public function actionLinks(){

		return $this->render('links');
	}



}