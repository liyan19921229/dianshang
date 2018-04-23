<?php
namespace backend\controllers;

use backend\common\BaseController;

use app\models\Admin;

/**
* 登录控制器
*/
class LoginController extends BaseController{
    

	/*管理员展示*/
    public function actionAdminlist(){
        return $this->render('adminlist');
    }

    /*管理员登录*/
    public function actionAdminlogin()
    {
        if($this->isGet())
        {
            return $this->render('adminlogin');
        }
        if($this->isPost())
        {
            $admin_name = $_POST['admin_name'];
            $admin_pwd = $_POST['admin_pwd'];
            $res = md5($admin_pwd);
            $info = Admin::find()->where(['admin_name' =>$admin_name,'admin_pwd' =>$res])->one();
            // var_dump($info);die;
            if($info)
            {
                echo "<script>alert('登录成功');location.href='/index/index'</script>";
            }
            else
            {
                echo "<script>alert('登录失败');location.href='/login/adminlogin'</script>";
            }
        }
            
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
