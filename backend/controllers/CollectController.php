<?php
namespace backend\controllers;

use backend\common\BaseController;

class CollectController extends BaseController
{

	public function actionCollectlist(){
		return $this->render('collectlist');
	}


}