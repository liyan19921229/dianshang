<?php
namespace backend\controllers;

use backend\common\BaseController;
use yii\base\ActionFilter;
use Yii;
header('content-type:text/html;charset=utf-8');
/**
* 权限管理
*/
class CommonController extends BaseController{
	
	 public function beforeAction($action)
    {
        $session=$this->getSession("info");
		// print_r($session);
		if (empty($session['admin_name'])) {
			echo "<script>alert('请先登录');location.href='/login/adminlogin'</script>";
             exit();
		}

		if (!$this->checknode()) {
			 echo "<script>alert('没有该权限');location.href='/index/main'</script>";
			 exit();
		}
        return parent::beforeAction($action);
    }


    public function checknode(){
    	$access=$_SERVER['REQUEST_URI'];
    	$newaccess=substr($access,1);
    	// print_r($newaccess);die;
    	$arr=explode('/', $newaccess);
    	$controller=$arr[0];
    	$action=$arr[1];
    	// 获取当前的控制器、方法名
 		//  $controllerID = \Yii::$app->controller->id;
		//  $actionID = \Yii::$app->controller->action->id;
		//  $access=$controllerID."/".$actionID;
		
		if ($controller=="index") {
    		return true;
    	}

    	// 超级管理员
    	$session=$this->getSession("info");
    	if ($session['admin_name']=="李岩") {
    		return true;
    	}
    	$admin_id=$session['admin_id'];
    	
    	// 获取自己的权限
    	$sql="select concat(node_controller,'/',node_action) as access from five2_node where node_id in (select node_id from five2_role_node where role_id in (select role_id from five2_admin_role where admin_id=".$admin_id."))";
    	$connection=Yii::$app->db;
    	$mynode=$connection->createCommand($sql)->queryAll();
    	// 将二维数组转换成一维数组
    	$mynode=array_column($mynode,'access');
    	// 将控制其名转换成小写
    	$newmynode=array();
    	foreach ($mynode as $key => $val) {
    		$newmynode[$key] = strtolower($val);
    	}
    	// echo "<pre>";
    	// var_dump($new);
    	
    	if (in_array($newaccess,$newmynode)) {
    		return true;
    	}
    }


}