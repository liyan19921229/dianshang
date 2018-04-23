<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_admin".
 *
 * @property integer $admin_id
 * @property string $admin_name
 * @property string $admin_pwd
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_name', 'admin_pwd'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'admin_name' => 'Admin Name',
            'admin_pwd' => 'Admin Pwd',
        ];
    }
}
