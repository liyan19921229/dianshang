<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_attr_k".
 *
 * @property integer $attr_k_id
 * @property string $attr_k_name
 * @property integer $cate_id
 * @property integer $attr_k_pid
 */
class AttrK extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_attr_k';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'attr_k_pid'], 'integer'],
            [['attr_k_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attr_k_id' => 'Attr K ID',
            'attr_k_name' => 'Attr K Name',
            'cate_id' => 'Cate ID',
            'attr_k_pid' => 'Attr K Pid',
        ];
    }
}
