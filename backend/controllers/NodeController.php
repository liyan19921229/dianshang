<?php
namespace backend\controllers;

use backend\common\BaseController;

class NodeController extends BaseController{
	
/**
 * 权限管理
 * @return [type] [description]
 */
	public function actionAdd(){
		return $this->render('add');
	}


	public function actionLists(){
		// return $this->render('lists');
	}


	public function actionDelete(){
		
	}


	public function actionUpdate(){
		
	}
}