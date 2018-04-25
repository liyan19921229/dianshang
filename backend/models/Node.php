<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_node".
 *
 * @property integer $node_id
 * @property string $node_name
 * @property string $node_controller
 * @property string $node_action
 * @property integer $node_status
 * @property integer $node_pid
 */
class Node extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_node';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['node_status', 'node_pid'], 'integer'],
            [['node_name', 'node_controller', 'node_action'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'node_id' => 'Node ID',
            'node_name' => 'Node Name',
            'node_controller' => 'Node Controller',
            'node_action' => 'Node Action',
            'node_status' => 'Node Status',
            'node_pid' => 'Node Pid',
        ];
    }

    // 无限极分类（递归）
    // 获取带顺序的权限
    public static function getnodeorder($node,$node_pid=0,$lev=0){
        global $tmp;
        foreach ($node as $key => $val) {
            if ($val['node_pid']==$node_pid) {
                $val['lev']=$lev;
                $tmp[]=$val;
                self::getnodeorder($node,$val['node_id'],$lev+1);
            }
        }
        return $tmp;
    }
}
