<?php
namespace backend\controllers;

use common\models\Category;

use backend\common\BaseController;

/**
* 分类的管理
*/
class CategoryController extends BaseController{

	/*分类列表*/
	public function actionCatelist()
	{
		$cate=new Category;
		$data = Category::find()->asArray()->all();
		// echo "<pre>";
     	// var_dump($data);die;
        return $this->render('catelist',['data'=>$data]);
	}


	/*分类添加*/
	public function actionAddcate()
	{
	     return $this->render('addcate');
	}
	public function actionAddcate_add()
	{
		$data = $this->post();
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
		return $this->render('update');
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