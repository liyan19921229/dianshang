<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_guige".
 *
 * @property integer $g_id
 * @property string $g_name
 * @property integer $attr_id
 */
class Guige extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_guige';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attr_id'], 'integer'],
            [['g_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'g_name' => 'G Name',
            'attr_id' => 'Attr ID',
        ];
    }
}
