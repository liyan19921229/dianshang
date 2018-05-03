<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_admin_role".
 *
 * @property integer $admin_id
 * @property integer $role_id
 */
class AdminRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_admin_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id'], 'required'],
            [['admin_id', 'role_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'role_id' => 'Role ID',
        ];
    }


    public function addall($arr){
        $key=array_keys($arr['0']);
        $k="(`".implode('`,`', $key)."`)";
        foreach ($arr as $key => $val) {
            $v[]="('".implode("','",$val)."')";
        }
        $v2=implode(",",$v);       
        $sql="insert into five2_admin_role $k values $v2";
        $connection=Yii::$app->db;
        $num=$connection->createCommand($sql)->execute();
        return $num;
    }
}
