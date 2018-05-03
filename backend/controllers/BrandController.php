<?php
namespace backend\controllers;

use backend\common\BaseController;
use common\models\Brand;
use common\models\Type;

/**
* 商品的管理
*/
class BrandController extends CommonController{
	

	/*品牌列表*/
	public function actionBrandlist(){
		$brand = Brand::find()->joinWith('type')->orderBy('sort DESC')->all();

		return $this->render('brandlist',['brand'=>$brand]);
	}


	/*添加品牌*/
	public function actionAddbrand(){
		if ($this->isGet()) {
			$type = Type::find()->all();

			return $this->render('addbrand',['type'=>$type]);	
		}else{
			$brand = new Brand();
			$data = $this->post();
			$data['brand_logo'] = $this->do_upload('brand_logo','images/goods');
			if ($data['brand_logo']) {
				$brand->attributes = $data;
				if ($brand->save()) {
					return $this->alert('添加成功','/brand/brandlist');
				}else{
					die('品牌添加失败');
				}
			}else{
				return $this->alert('图片上传失败','/brand/brandlist');
			}

		}
	}


	/*删除品牌*/
	public function actionDelbrand($id){
		$brand = Brand::find()->where(['brand_id'=>$id])->one();
		if ($brand) {
			if ($brand->delete()) {
				return $this->redirect('/brand/brandlist');
			}else{
				die('删除出错');
			}
		}	
	}


	/**
	* 修改品牌
	* 返回0 修改失败
	* 返回1 修改成功
	*/
	public function actionUpbrand(){
		$brand_id = $this->get('brand_id');
		$num      = $this->get('num');

		$brand = Brand::find()->where(['brand_id'=>$brand_id])->one();
		if ($brand) {
			$brand->sort = $num;
			if ($brand->save()) {
				// 修改成功，返回数据
				$new_num = Brand::find()->select('sort')->where(['brand_id'=>$brand_id])->one();

				$arr = [
					'code' => 1,
					'msg'  => '修改成功',
					'data' => $new_num['sort'],
				];
			}else{
				$arr = [
					'code' => 0,
					'msg'  => '修改失败',
					'data' => '',
				];
			}
		}
		echo json_encode($arr);

	}



}