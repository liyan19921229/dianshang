<?php
namespace backend\controllers;

use backend\common\BaseController;

class RbacController extends BaseController{
	

	/*权限列表*/
	public function actionRbaclist(){
		return $this->render('rbaclist');
	}


	/*添加权限*/
	public function actionAddrbac(){
		return $this->render('addrbac');
	}


	/*添加角色*/
	public function actionAddrole(){
		return $this->render('addrole');
	}

}