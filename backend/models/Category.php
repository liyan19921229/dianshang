<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_category".
 *
 * @property integer $cate_id
 * @property string $cate_name
 * @property integer $cate_pid
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_pid'], 'integer'],
            [['cate_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => 'Cate ID',
            'cate_name' => 'Cate Name',
            'cate_pid' => 'Cate Pid',
        ];
    }

    // 无限极分类
    public static function getcateorder($cate,$cate_pid=0,$lev=0){
        global $tmp;
        foreach ($cate as $key => $val) {
            if ($val['cate_pid']==$cate_pid) {
                $val['lev']=$lev;
                $tmp[]=$val;
                self::getcateorder($cate,$val['cate_id'],$lev+1);
            }
        }
        return $tmp;
    }
}
