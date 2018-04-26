<?php
namespace frontend\controllers;
use yii\helpers\url;
use app\common\BaseController;
use app\models\User;

class LoginController extends BaseController{
	public function actionLogin(){
		return $this->renderPartial('login');
	}

	public function actionLogin_do(){
		$form = $this->post();
		$user=new User;
		$data['user_name']=$user->user_name=$form{'user_name'};
		$data['user_pwd']=$user->user_pwd=md5($form{'user_pwd'});

		// 后台非空验证
		if ($data['user_name']=="") {
			return $this->alert("用户名不能为空",'login/login');
			
		}

		if ($data['user_pwd']=="") {
			echo "<script>alert('密码不能为空');location.href='login'</script>";
			exit();
		}
		
		$user= User::find()->where($data)->asArray()->one();
		if ($user) {
			unset($user['user_pwd']);
			$this->setSession("user",$user);

			$this->redirect(Url::to(['index/index']));
		}else{
			$this->redirect(Url::to(['login/login']));
		}
	}
}