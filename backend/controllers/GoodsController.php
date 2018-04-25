<?php
namespace backend\controllers;

use backend\common\BaseController;
use common\models\Category;
use common\models\Brand;
use common\models\Type;

/**
* 商品的管理
*/
class GoodsController extends BaseController{
	
	public $enableCsrfValidation = false;//csrf攻击

	/*商品列表*/
	public function actionGoodslist(){
		return $this->render('goodslist');
	}


	/*添加商品*/
	public function actionAddgoods(){
		if ($this->isGet()) {
			// 分类展示
			$category_arr = Category::find()->asArray()->all();
			$category = $this->getOrder($category_arr,'cate_pid','cate_id');
			// 类型展示
			$type = Type::find()->all();
			// 品牌展示
			$brand = Brand::find()->all();
			return $this->render('addgoods',['category'=>$category,'type'=>$type,'brand'=>$brand]);			
		}else{

		
    var_dump($_POST);



		}
	}

	


	/*删除商品*/
	public function actionDelgoods(){
		return "我是删除商品";
	}


	/*修改商品*/
	public function actionUpgoods(){
		return "我是修改商品";

	}


	/*商品回收站*/
	public function actionBin(){
		return $this->render('bin');
	}



}