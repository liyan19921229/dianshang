<?php
namespace backend\controllers;
use yii\helpers\url;
use app\models\Category;
use backend\common\BaseController;



/**
* 分类的管理
*/
class CategoryController extends BaseController{



	/*分类添加*/
	public function actionAddcate()
	{
		$node=new Category;
		$cate = Category::find()->asArray()->all();		
		$ordercate=Category::getcateorder($cate);
		// echo "<pre>";
		// print_r($order_cate);die;
		return $this->render('addcate',array("cates"=>$ordercate));		
	}


	public function actionAddcate_add()
	{
		$data = $this->post();
		// echo "<pre>";
  		// var_dump($data);die;
        $user=new Category();
        $user->cate_name = $data['cate_name'];
        $user->cate_pid = $data['cate_pid'];
        $user->save();
		if($user)
        {
           return $this->redirect('/category/catelist');
        }
        else
        {
           return $this->redirect('/category/addcate');
        }
	}


	/*分类列表*/
	public function actionCatelist()
	{
		$cate=new Category;
		$data = Category::find()->asArray()->all();
		$ordercate=Category::getcateorder($data);
		// echo "<pre>";
     	// var_dump($data);die;
        return $this->render('catelist',['data'=>$ordercate]);
	}



	/*删除分类*/
	public function actionDelete($id)
	{
		$userInfo = Category::find()->where(['cate_id' => $id])->one();
		$use = $userInfo->delete();
		if($use)
        {
           return $this->redirect('/category/catelist');
        }
        else
        {
           return $this->redirect('/category/catelist');
        }
	}

	public function actionUpdate()
	{
		$id=$_GET['id'];
		// 查单条数据
		$userInfo = Category::find()->where(['cate_id' => $id])->one();
		// 查询所有分类
		$cate=new Category;
		$data = Category::find()->asArray()->all();
		$allcate=Category::getcateorder($data);
		return $this->render('update',array("cate"=>$userInfo,"all"=>$allcate));
	}

	/*修改分类*/
	public function actionUpdate_up()
	{
		$userInfo = Category::find()->where(['cate_name'=>'cate_name'])->one();
        $user->save();
        if($use)
        {
           return $this->redirect('/category/catelist');
        }
        else
        {
           return $this->redirect('/category/update');
        }
	}


}