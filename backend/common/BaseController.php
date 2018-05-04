<?php
namespace backend\common;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;

class BaseController extends Controller{
	
	public $layout = false;	

	/*get方式传参*/	
	public function get($param=null,$default=''){
		return yii::$app->request->get($param,$default);
	}

	/*post方式传参*/
	public function post($param=null,$default=''){
		return yii::$app->request->post($param,$default);
	}


	/*是否get请求*/
	public function isGet(){
		return yii::$app->request->isGet;
	}

	/*是否POST请求*/
	public function isPost(){
		return yii::$app->request->isPost;
	}


	/*执行一条sql语句*/
    public function querydata($sql,$type=2){
        switch($type){
            case 1 :
                // 返回一行 (第一行)
                // 如果该查询没有结果则返回 false
                return yii::$app->db->createCommand($sql)->queryOne();
            case 2 :
                // 返回多行. 每行都是列名和值的关联数组.
                // 如果该查询没有结果则返回空数组
                return yii::$app->db->createCommand($sql)->queryAll();
            case 3 :
                // 返回一列 (第一列)
                // 如果该查询没有结果则返回空数组
                return yii::$app->db->createCommand($sql)->queryColumn();
            case 4 :
                // 返回一个标量值
                // 如果该查询没有结果则返回 false
                return yii::$app->db->createCommand($sql)->queryScalar();
        }

    }


    /*跳转*/
    public function alert($msg,$path){
        $url = Url::home(true).$path;
        return $this->render('@backend/views/common/alert',['msg'=>$msg,'url'=>$url]);

    }


    /*存储session*/
    public function setSession($name='session', $data){
        $session = yii::$app->session;
        $session->open();
        $res = $session->set($name,$data);
        $session->close();
        return $res;
    }

    /*获取session*/
    public function getSession($name='session'){
        $session = yii::$app->session;
        $res = $session->get($name);
        $session->close();
        return $res;
    }

    /*删除session*/
    public function delSession($name='session'){
        $session = yii::$app->session;
        $res = $session->remove($name);
        $session->close();
        return $res;
    }


    /*
	* 生成随机字符串
	* [a~zA~Z0~9_]
	* $num 默认16为
	* return string
    */
	public static function getStr($num=16){
		$arr = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9','_'];
		$str = "";
		for ($i=0; $i < $num; $i++) { 
			$str .= $arr[rand(0,count($arr)-1)];
		}
		return $str;
	}


	/*图片上传*/
	public function do_upload($logo,$path='uploads'){
		$fileInfo=$_FILES[$logo];

		$maxSize=2097152;//允许的最大值

		$allowExt=array('jpeg','jpg','png','gif','wbmp','JPG');//允许的类型

		$flag=true;//检测是否为真实图片类型
		
		//判断错误号
		if ($fileInfo['error']==0) {
			//判断上传文件的大小
			if ($fileInfo['size']>$maxSize) exit('上传文件大小不符合规则');

			$ext=pathinfo($fileInfo['name'],PATHINFO_EXTENSION);

			if (!in_array($ext,$allowExt)) exit('非法文件类型');

			if (!is_uploaded_file($fileInfo['tmp_name'])) exit('文件不是通过HTTP POST方式上传的');
			//检测是否是真实图片类型
			if ($flag){
				if (@!getimagesize($fileInfo['tmp_name'])){
					exit('不是真正的图片类型');
				}
			}

			if (!file_exists($path)){
				mkdir($path,0777,true);
				chmod($path,0777);
			}
			//确保文件名唯一防止产生覆盖
			$nuiName=md5(uniqid(microtime(true),true)).'.'.$ext;
			$destination=$path.'/'.$nuiName;
			if (@move_uploaded_file($fileInfo['tmp_name'], $destination)){
				return $destination;
			}else{
				return $fileInfo['name'] . 'error';
			}
		}else{
			return false;
			// $this->uploads_error($fileInfo['error']);//验证错误类型
		}
	}


	// /*无限极分类--递归*/
	public function getOrder($data,$param='',$id='',$p_id=0,$len=0){
		if (empty($param) || empty($id)) {
			return "<h1>请填入父级ID和本ID</h1>";
		}
		global $tmp;
		foreach ($data as $key => $val) {
			if ($val[$param] == $p_id) {
				$val['len'] = $len;
				$tmp[] = $val;
				$this->getOrder($data,$param,$id,$val[$id],$len+1);
			}
		}
		return $tmp;
	}



	/*多图片上传*/
	public function do_uploads($fileInfo,$path='uploads'){

		$maxSize=2097152;//允许的最大值

		$allowExt=array('jpeg','jpg','png','gif','wbmp','JPG');//允许的类型

		$flag=true;//检测是否为真实图片类型
		
		//判断错误号
		if ($fileInfo['error']==0) {
			//判断上传文件的大小
			if ($fileInfo['size']>$maxSize) exit('上传文件大小不符合规则');

			$ext=pathinfo($fileInfo['name'],PATHINFO_EXTENSION);

			if (!in_array($ext,$allowExt)) exit('非法文件类型');

			if (!is_uploaded_file($fileInfo['tmp_name'])) exit('文件不是通过HTTP POST方式上传的');
			//检测是否是真实图片类型
			if ($flag){
				if (@!getimagesize($fileInfo['tmp_name'])){
					exit('不是真正的图片类型');
				}
			}

			if (!file_exists($path)){
				mkdir($path,0777,true);
				chmod($path,0777);
			}
			//确保文件名唯一防止产生覆盖
			$nuiName=md5(uniqid(microtime(true),true)).'.'.$ext;
			$destination=$path.'/'.$nuiName;
			if (@move_uploaded_file($fileInfo['tmp_name'], $destination)){
				return $destination;
			}else{
				return $fileInfo['name'] . 'error';
			}
		}else{
			return false;
			// $this->uploads_error($fileInfo['error']);//验证错误类型
		}
	}
}