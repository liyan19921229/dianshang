<?php
namespace backend\controllers;

use backend\common\BaseController;
// use common\models\Category;
use common\models\Brand;
use common\models\Goods;
use app\models\Category;
use common\models\AttrK;
use common\models\AttrV;
use common\models\GoodsSku;
use common\models\goodsImg;


/**
* 商品的管理
*/
class GoodsController extends BaseController{
	

	/*商品列表*/
	public function actionGoodslist(){
		// 查询商品
		$goods = Goods::find()->select(['goods_id','goods_image','goods_name','market_price','sell_price','goods_num','goods_unit','goods_status','is_new','is_hot','is_delivery_free'])->where(['is_del'=>1])->all();
		// 分页


		return $this->render('goodslist',['goods'=>$goods]);
	}


	/*添加商品*/
	public function actionAddgoods(){
		if ($this->isGet()) {
			// 分类展示
			$category_arr = Category::find()->asArray()->all();
			$category = $this->getOrder($category_arr,'cate_pid','cate_id');
			// 类型展示
			$cate_type = Category::find()->where(['cate_pid'=>0])->all();
			// 品牌展示
			$brand = Brand::find()->all();
			return $this->render('addgoods',['category'=>$category,'type'=>$cate_type,'brand'=>$brand]);			
		}else{
			
			// 获取商品信息
			$data = $this->post();
			$data['goods_desc'] = $data['editorValue'];
			unset($data['editorValue']);
			$attr = implode('|', $data['attr']);
			$attr_num = $data['attr_num'];
			$attr_price = $data['attr_price'];
			
			// 商品名称非空验证
			if ($data['goods_name'] == '' || $data['keywords'] == '') {
				return $this->alert('请先填内容error','/goods/addgoods');
			}
			
			// 生成唯一的货号
			$data['goods_sn'] = 'SD_0'.rand(1000000,9999999);
			$data['up_time'] = date("Y-m-d H:i:s",time());
			$data['c_time'] = date("Y-m-d H:i:s",time());

			//调用上传图片类 
			$data['goods_image'] = $this->do_upload('goods_image','images/goods');
			if ($data['goods_image']) {
				// 商品入库
				$goods = new Goods();
				$goods->attributes = $data;
				if ($goods->save()) {
					// 获取刚刚插入的ID SKU入库
					$goods_id = \Yii::$app->db->getLastInsertID();
					$sku = new GoodsSku();
					$sku->goods_id = $goods_id;
					$sku->attr_k_v = $attr;
					$sku->attr_num = $attr_num;
					$sku->attr_price = $attr_price;
					if(!($sku->save())){
						die('属性规格添加失败');
					}

					// 添加商品的相册
					$files = $_FILES['goods_img'];
					$error_num = $files['error'][0];
		            if ($error_num == 0) {
		            	$file_img=[];
						foreach ($files as $key => $val) {
			                foreach ($val as $k => $v) {
			               		$file_img[$k][$key]=$val[$k];
			                }			
						}
						// 循环添加商品相册
						$num = count($file_img);
						for ($i=0; $i < $num; $i++) { 
							$img_url = $this->do_uploads($file_img[$i],'images/goods');
							$goodsimg = new GoodsImg();
							$goodsimg->img_url = $img_url;
							$goodsimg->goods_id = $goods_id;
							$goodsimg->save();
				
						}

					return $this->alert('商品添加完成','/goods/goodslist');
		            }
				}else{
					die('商品添加失败');
				}
			}else{
				return $this->alert('图片错误','/goods/addgoods');
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


	/*通过分类ID查询属于此分类的属性*/
	public function actionGetattr($cate_id){
		$attr_name_arr = AttrK::find()->select(['attr_k_id','attr_k_name'])->where(['cate_id'=>$cate_id])->asArray()->all();
		
		$ids = [];
		$names = [];
		foreach ($attr_name_arr as $key => $val) {
			$ids[] = $val['attr_k_id'];
			$names[] = $val['attr_k_name'];
		}

		//通过获取到的属性ID查询属性值表
		$attr_val_arr = AttrV::find()->select('attr_v_name')->where(['attr_k_id'=>$ids])->asArray()->all();
		$values = [];
		foreach ($attr_val_arr as $v) {
			$values[] = $v['attr_v_name'];
		}
		$arr = [
			'name' => $names,
			'value' => $values
		];
		
		echo json_encode($arr);
	}


}