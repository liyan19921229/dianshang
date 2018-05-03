<?php
namespace backend\controllers;
use yii\helpers\url;
use backend\common\BaseController;
use app\models\Node;
use app\models\Role;
use app\models\RoleNode;
use app\models\Admin;
use app\models\AdminRole;
use Yii;
header('content-type:text/html;charset=utf-8');
class AdminController extends CommonController{
	
/**
 * 管理员添加
 * @return [type] [description]
 */
	public function actionAdd(){
		// 查询所有角色
		$role=new Role;
		$role=Role::find()->asArray()->all();
		// echo "<pre>";
		// print_r($role);die;
		return $this->render("add",array("role"=>$role));
	}

	public function actionAdd_do(){
		
		$admin=new Admin;
		$form = $this->post();	
		$role_id=$form["role_id"];
		// print_r($role_id);die;
		$admin->admin_name=$form['admin_name'];
		$admin->admin_pwd=md5($form['admin_pwd']);
		$admin->save();
		$admin_id = $admin->attributes['admin_id'];
		$tmp=array();
		if ($admin_id) {
			// 添加用户角色关联表
			foreach ($role_id as $key => $val) {
				$tmp[]=array("admin_id"=>$admin_id,"role_id"=>$val);
			}
			$adminrole=new AdminRole;
			$arr=$adminrole->addall($tmp);
		}
		if ($arr) {
			echo "<script>alert('添加成功');location.href='/admin/lists'</script>";
		}else{
			echo "<script>alert('添加失败');location.href='/admin/add'</script>";
		}
	}
	
	
	/**
	 * 管理员展示
	 */
 	public function actionLists(){
		$admin=new Admin;
		$admin=Admin::find()->asArray()->all();
		// echo "<pre>";
		// print_r($admin);die;
		$connection=Yii::$app->db;
        foreach ($admin as $k => $v) {
        	$sql="select role_name from five2_role where role_id in (select role_id from five2_admin_role where admin_id=".$v['admin_id'].")";
	        $role_name=$connection->createCommand($sql)->queryAll();
	        // print_r($role_name);die;
	        $tmp = array_column($role_name,'role_name');
	        $admin[$k]['role_name'] = implode(",",$tmp);
        }
        // print_r($admin);die;
		return $this->render("lists",array("admin"=>$admin));
	}

	/**
	 * 管理员删除
	 */
	
	public function actionDelete(){
		$id=$this->get("id");	
		$admin=Admin::findOne("$id")->delete();
		if ($admin) {
			echo "<script>alert('删除成功');location.href='/admin/lists'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='/admin/lists'</script>";
		}
	}

	/**
	 * 管理员修改
	 */

	
	
}