<?php
namespace backend\controllers;

use backend\common\BaseController;
// use common\models\Category;
use common\models\Brand;
use common\models\Goods;
use app\models\Category;
/**
* 商品的管理
*/
class GoodsController extends BaseController{
	

	/*商品列表*/
	public function actionGoodslist(){
		$goods = Goods::find()->select(['goods_id','goods_image','goods_name','market_price','sell_price','goods_num','goods_unit','goods_status','is_new','is_hot','is_delivery_free'])->where(['is_del'=>1])->all();

		return $this->render('goodslist',['goods'=>$goods]);
	}


	/*添加商品*/
	public function actionAddgoods(){
		if ($this->isGet()) {
			// 分类展示
			$category_arr = Category::find()->asArray()->all();
			$category = $this->getOrder($category_arr,'cate_pid','cate_id');
			// 品牌展示
			$brand = Brand::find()->all();
			return $this->render('addgoods',['category'=>$category,'brand'=>$brand]);			
		}else{
			
			$data = $this->post();
			if ($data['goods_name'] == '' || $data['keywords'] == '') {
				return $this->alert('请先填内容error','/goods/addgoods');
			}
			$data['goods_sn'] = 'SD_0'.rand(1000000,9999999);
			$data['up_time'] = date("Y-m-d H:i:s",time());
			$data['c_time'] = date("Y-m-d H:i:s",time());
			// echo "<pre>";
			// var_dump($data);
			// die;
			$data['goods_image'] = $this->do_upload('goods_image','images/goods');
			if ($data['goods_image']) {
				$goods = new Goods();
				$goods->attributes = $data;
				if ($goods->save()) {
					return $this->alert('商品添加完成','/goods/goodslist');
				}else{
					die('商品添加失败');
				}
			}else{
				return $this->alert('图片错误','/goods/goodslist');
			}



		}
	}

	


	/*删除商品*/
	public function actionDelgoods($goods_id){
		$goods = Goods::find()->where(['goods_id'=>$goods_id])->one();
		if($goods){
			$goods->is_del = 0;
			$goods->del_time = date("Y-m-d H:i:s",time());
			if($goods->save()){
				return $this->redirect('/goods/goodslist');
			}else{
				die('删除有误');
			}
		}
	}


	/*商品上下架*/
	public function actionUpsta($id){
		$goods = Goods::find()->where(['goods_id'=>$id])->one();
		if ($goods['goods_status'] == 1) {
			$goods->goods_status = 0;
			if ($goods->save()) {
				return $this->redirect('/goods/goodslist');
			}
		}else{
			$goods->goods_status = 1;
			if ($goods->save()) {
				return $this->redirect('/goods/goodslist');
			}
		}

	}	


	/*修改商品*/
	public function actionUpgoods(){
		return "我是修改商品";

	}


	/*商品回收站*/
	public function actionBin(){
		$delgoods = Goods::find()->select(['goods_id','goods_image','goods_name','del_time'])->where(['is_del'=>0])->all();

		return $this->render('bin',['delgoods'=>$delgoods]);
	}

	/*回收站--恢复商品*/
	public function actionBinset($id){
		$delgoods = Goods::find()->where(['goods_id'=>$id])->one();
		if($delgoods){
			$delgoods->is_del = 1;
			if($delgoods->save()){
				return $this->alert('已恢复','/goods/bin');
			}else{
				die('恢复有误');
			}
		}
	}


}