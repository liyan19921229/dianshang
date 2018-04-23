<?php
namespace frontend\controllers;


use app\models\User;
use yii\helpers\url;
use app\common\BaseController;

class RegistController extends BaseController{
	
	public function actionRegist(){
		return $this->renderPartial('regist');
		// $user= User::find()->where(['user_id'=>2])->one();
		// return $this->renderPartial('user',['user'=>$user]);
	}

	//1、用户注册添加 ，注册成功之后直接跳转到登陆页面
	//2、注册需要做个验证

	public function actionAdd_do(){
		$form = $this->post();
		$user=new User;
		$user->user_name=$form['user_name'];
		$user->user_pwd=md5($form['user_pwd']);
		$user->user_email=$form['user_email'];
		$user->user_tel=$form['user_tel'];
		$data=$user->save();
		if ($data) {
			$this->redirect(Url::to(['login/login']));
		}else{
			$this->redirect(Url::to(['regist/regist']));
		}
	}

	

}