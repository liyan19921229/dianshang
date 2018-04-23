<?php
namespace backend\controllers;

use backend\common\BaseController;


/**
* 会员控制器
*/
class UserController extends BaseController
{

	/*会员列表*/
	public function actionList(){

		return $this->render('list');

	}


	/*添加会员*/
	public function actionAdduser(){

		return $this->render('adduser');

	}


	/*会员等级*/
	public function actionRank(){

		return $this->render('rank');

	}


	/*会员留言*/
	public function actionMessage(){

		return $this->render('message');

	}


	/*添加等级*/
	public function actionAddrank(){

		return $this->render('addrank');

	}


	/*资金管理*/
	public function actionAccount(){

		return $this->render('account');

	}


	/*编辑会员资料*/
	public function actionEdituser(){

		return $this->render('edituser');

	}


	/*资金变动明细*/
	public function actionDetails(){

		return $this->render('details');

	}


	/*恢复留言*/
	public function actionReplymsg(){

		return $this->render('replymsg');

	}


}

