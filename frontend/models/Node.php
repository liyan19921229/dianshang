<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "five2_node".
 *
 * @property integer $node_id
 * @property string $node_controller
 * @property string $node_action
 * @property string $node_name
 * @property integer $node_status
 * @property integer $node_pid
 * @property string $node_path
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
            [['node_controller', 'node_action', 'node_name', 'node_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'node_id' => 'Node ID',
            'node_controller' => 'Node Controller',
            'node_action' => 'Node Action',
            'node_name' => 'Node Name',
            'node_status' => 'Node Status',
            'node_pid' => 'Node Pid',
            'node_path' => 'Node Path',
        ];
    }
}
