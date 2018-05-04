<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_goods_img".
 *
 * @property integer $img_id
 * @property string $img_url
 * @property integer $goods_id
 */
class GoodsImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_goods_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id'], 'integer'],
            [['img_url'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'img_id' => 'Img ID',
            'img_url' => 'Img Url',
            'goods_id' => 'Goods ID',
        ];
    }
}
