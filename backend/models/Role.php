<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_role".
 *
 * @property integer $role_id
 * @property string $role_name
 * @property integer $role_status
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_status'], 'integer'],
            [['role_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => 'Role ID',
            'role_name' => 'Role Name',
            'role_status' => 'Role Status',
        ];
    }
}
