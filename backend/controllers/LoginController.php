<?php
namespace backend\controllers;

use backend\common\BaseController;

/**
* 登录控制器
*/
class LoginController extends BaseController{
    

	/*管理员展示*/
    public function actionAdminlist(){
        return $this->render('adminlist');
    }


    /*管理员登录*/
    public function actionAdminlogin(){
        return $this->render('adminlogin');
    }


    // /*管理员退出*/
    // public function actionAdminlogout(){
    //     // return "退出";
    //     return $this->redirect('/index/index');
    // }


    /*修改密码*/
    public function actionUppwd(){

    	return $this->render('uppwd');
    }



}