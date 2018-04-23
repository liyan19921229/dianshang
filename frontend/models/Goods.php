<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_goods".
 *
 * @property integer $goods_id
 * @property string $goods_name
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
        ];
    }
}
