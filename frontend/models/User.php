<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_user".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_pwd
 * @property string $user_repwd
 * @property string $user_email
 * @property string $user_tel
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_email'], 'string', 'max' => 50],
            [['user_pwd', 'user_repwd'], 'string', 'max' => 32],
            [['user_tel'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_pwd' => 'User Pwd',
            'user_repwd' => 'User Repwd',
            'user_email' => 'User Email',
            'user_tel' => 'User Tel',
        ];
    }
}
