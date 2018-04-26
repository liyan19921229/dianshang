<?php
namespace backend\controllers;

use common\models\Type;

use backend\common\BaseController;

/**
* 分类的管理
*/
class TypeController extends BaseController{

	/*类型列表*/
	public function actionTypelist()
	{
		$cate=new Type;
		$data = Type::find()->asArray()->all();
		// echo "<pre>";
     	// var_dump($data);die;
        return $this->render('typelist',['data'=>$data]);
	}
	/*类型添加展示页面*/
	public function actionTypecate()
	{
		return $this->render('typecate');
	}

	/*类型添加*/
	public function actionTypecate_add()
	{     
        $data = $this->post();
        // var_dump($data);die;
        $user=new Type();
        $user->type_name = $data['type_name'];
        $user->save();
		if($user)
        {
           return $this->redirect('/type/typelist');
        }
        else
        {
           return $this->redirect('/type/typecate');
        }
	}


	/*删除类型*/
	public function actionDelete($id)
	{
		$userInfo = Type::find()->where(['type_id' => $id])->one();
		$use = $userInfo->delete();
		if($use)
        {
           return $this->redirect('/type/typelist');
        }
        else
        {
           return $this->redirect('/type/typelist');
        }
	}
	/*修改展示页面*/
    public function actionTypeupdate()
    {
    	return $this->render('typeupdate');
    }

	/*修改类型*/
	public function actionUpdate()
	{
		$user = Type::find()->where(['type_name'=>'type_name','type_id'=>'type_id'])->one();
        $user->save();
		
	}

}