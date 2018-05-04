<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_attr_v".
 *
 * @property integer $attr_v_id
 * @property string $attr_v_name
 * @property integer $attr_k_id
 */
class AttrV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_attr_v';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attr_k_id'], 'integer'],
            [['attr_v_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attr_v_id' => 'Attr V ID',
            'attr_v_name' => 'Attr V Name',
            'attr_k_id' => 'Attr K ID',
        ];
    }
}
