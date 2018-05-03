<?php
namespace backend\controllers;
use yii\helpers\url;
use backend\common\BaseController;
use app\models\Node;

class NodeController extends CommonController{
	
/**
 * 权限管理
 * @return [type] [description]
 */

	public function actionAdd(){
		// echo "<pre>";
	 //    print_r($_SERVER);
		
		$node=new Node;
		$node=Node::find()->asArray()->all();
		$nodes=Node::getnodeorder($node);
		// echo "<pre>";
		// print_r($nodes);die();
		return $this->render('add',array("nodes"=>$nodes));
	}


	public function actionAdd_do(){
		// 获取所有权限
		$form = $this->post();	
		$node=new Node;
		$node->node_name=$form['node_name'];
		$node->node_controller=$form['node_controller'];
		$node->node_action=$form['node_action'];
		$node->node_status=$form['node_status'];
		$node->node_pid=$form['node_pid'];
		$data=$node->save();
		if ($data) {
			$this->redirect('/node/lists');
		}else{
			$this->redirect(Url::to(['node/add']));
		}
	}

	

	public function actionLists(){	
		// echo "<pre>";
	 //    print_r($_SERVER);
		$node=new Node;
		$node=Node::find()->asArray()->all();
		$nodes=Node::getnodeorder($node);
		return $this->render('lists',array("nodes"=>$nodes));
	}


	public function actionDelete(){
		$id=$this->get("id");	
		$node=Node::findOne("$id")->delete();
		if ($node) {
			echo "<script>alert('删除成功');location.href='/node/lists'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='/node/lists'</script>";
		}
	}


	public function actionUpdate(){
		$id=$this->get("id");
		$node=Node::find()->where("node_id=$id")->asArray()->one();
	}
}