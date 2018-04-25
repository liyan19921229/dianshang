<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_role_node".
 *
 * @property integer $role_id
 * @property integer $node_id
 */
class RoleNode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_role_node';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'node_id'], 'required'],
            [['role_id', 'node_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => 'Role ID',
            'node_id' => 'Node ID',
        ];
    }

    public function addall($arr){
        $key=array_keys($arr['0']);
        $k="(`".implode('`,`', $key)."`)";
        foreach ($arr as $key => $val) {
            $v[]="('".implode("','",$val)."')";
        }
       // print_r($v);
       //  echo "<br />";
        $v2=implode(",",$v);
        $sql="insert into five2_role_node $k values $v2";
        $connection=Yii::$app->db;
        $num=$connection->createCommand($sql)->execute();
        return $num;
    }

    public function rolenode($role_id){
        $sql="select node_name from five2_node where node_id in (select node_id from five2_role_node where role_id=$role_id)";
        $connection=Yii::$app->db;
        $node_name=$connection->createCommand($sql)->execute();
        $node=implode(",",$node_name);
        print_r($node);
    }
}
