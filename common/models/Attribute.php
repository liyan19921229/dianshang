<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_attribute".
 *
 * @property integer $attr_id
 * @property integer $cate_id
 * @property string $attr_name
 * @property integer $attr_input_type
 * @property string $attr_values
 */
class Attribute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_attribute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'attr_input_type'], 'integer'],
            [['attr_name', 'attr_values'], 'required'],
            [['attr_values'], 'string'],
            [['attr_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attr_id' => 'Attr ID',
            'cate_id' => 'Cate ID',
            'attr_name' => 'Attr Name',
            'attr_input_type' => 'Attr Input Type',
            'attr_values' => 'Attr Values',
        ];
    }
}
