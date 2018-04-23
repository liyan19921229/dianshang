<?php
namespace app\common;

use Yii;
use yii\web\Controller;


class BaseController extends Controller
{


public function posts(){
	return Yii::$app->request->post();
}
	



	
}

