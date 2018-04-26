<?php
namespace backend\controllers;
use yii\helpers\url;
use backend\common\BaseController;
use app\models\Node;
use app\models\Role;
use app\models\RoleNode;
use Yii;
header('content-type:text/html;charset=utf-8');
class RoleController extends BaseController{
	
/**
 * 角色管理
 * @return [type] [description]
 */

	public function actionAdd(){
		$node=new Node;
		$node=Node::find()->asArray()->all();
		$nodes=Node::getnodeorder($node);
		// echo "<pre>";
		// print_r($nodes);die();		
		return $this->render('add',array("nodes"=>$nodes));
	}

	public function actionAdd_do(){		
		$form = $this->post();	
		// echo "<pre>";
		// print_r($form);die;
		$node_id=$form["node_id"];
		// echo "<pre>";
		// print_r($node_id);die;
		$role=new Role;
		$role->role_name=$form['role_name'];
		$role->role_status=$form['role_status'];
		$role->save();
		$role_id = $role->attributes['role_id'];
		$tmp=array();

		if ($role_id) {
			//添加角色下的权限（role_node）
			 foreach ($node_id as $key => $val) {
			 	$tmp[]=array("role_id"=>$role_id,"node_id"=>$val);
			}
			
			$rolenode=new RoleNode;
			$roles=$rolenode->addall($tmp);
			// $a=$rolenode->save();  
		}

		if ($roles) {
			echo "<script>alert('添加成功');location.href='/role/lists'</script>";
		}else{
			echo "<script>alert('添加失败');location.href='/role/lists'</script>";
		}
	}

	// 展示角色下所拥有的的
	public function actionLists(){
		// 角色
		$role=new Role;
		$role=Role::find()->asArray()->all();
		// echo "<pre>";
  		// print_r($role);die;
  		
	    $connection=Yii::$app->db;
        foreach ($role as $k => $v) {
        	$sql="select node_name from five2_node where node_id in (select node_id from five2_role_node where role_id=".$v['role_id'].")";
	        $node_name=$connection->createCommand($sql)->queryAll();
	        $tmp = array_column($node_name,'node_name');
	        $role[$k]['node_name'] = implode(",",$tmp);
        }
        
		return $this->render("lists",array("role"=>$role));
	}

	public function actionDelete(){
		$id=$this->get("id");	
		$role=Role::findOne("$id")->delete();
		if ($role) {
			echo "<script>alert('删除成功');location.href='/role/lists'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='/role/lists'</script>";
		}
	}


	// 角色修改
	
}