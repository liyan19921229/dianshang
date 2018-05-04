<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_goods_sku".
 *
 * @property integer $sku_id
 * @property integer $goods_id
 * @property string $attr_k_v
 * @property integer $attr_num
 * @property string $attr_price
 */
class GoodsSku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_goods_sku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id'], 'required'],
            [['goods_id', 'attr_num'], 'integer'],
            [['attr_price'], 'number'],
            [['attr_k_v'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sku_id' => 'Sku ID',
            'goods_id' => 'Goods ID',
            'attr_k_v' => 'Attr K V',
            'attr_num' => 'Attr Num',
            'attr_price' => 'Attr Price',
        ];
    }
}
