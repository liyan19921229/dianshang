<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_goods".
 *
 * @property integer $goods_id
 * @property string $goods_name
 * @property string $goods_sn
 * @property string $sell_price
 * @property string $market_price
 * @property string $cost_price
 * @property string $up_time
 * @property string $down_time
 * @property string $c_time
 * @property integer $goods_num
 * @property string $goods_image
 * @property integer $goods_status
 * @property string $goods_desc
 * @property string $keywords
 * @property integer $goods_point
 * @property string $goods_unit
 * @property integer $sort
 * @property integer $goods_sale
 * @property integer $is_delivery_free
 * @property integer $cate_id
 * @property integer $brand_id
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $is_del
 * @property integer $exp
 * @property string $del_time
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
            [['sell_price', 'market_price', 'cost_price'], 'number'],
            [['up_time', 'down_time', 'c_time', 'del_time'], 'safe'],
            [['goods_num', 'goods_status', 'goods_point', 'sort', 'goods_sale', 'is_delivery_free', 'cate_id', 'brand_id', 'is_new', 'is_hot', 'is_del', 'exp'], 'integer'],
            [['goods_desc'], 'string'],
            [['goods_name', 'keywords'], 'string', 'max' => 30],
            [['goods_sn'], 'string', 'max' => 20],
            [['goods_image'], 'string', 'max' => 200],
            [['goods_unit'], 'string', 'max' => 15],
            [['goods_sn'], 'unique'],
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
            'goods_sn' => 'Goods Sn',
            'sell_price' => 'Sell Price',
            'market_price' => 'Market Price',
            'cost_price' => 'Cost Price',
            'up_time' => 'Up Time',
            'down_time' => 'Down Time',
            'c_time' => 'C Time',
            'goods_num' => 'Goods Num',
            'goods_image' => 'Goods Image',
            'goods_status' => 'Goods Status',
            'goods_desc' => 'Goods Desc',
            'keywords' => 'Keywords',
            'goods_point' => 'Goods Point',
            'goods_unit' => 'Goods Unit',
            'sort' => 'Sort',
            'goods_sale' => 'Goods Sale',
            'is_delivery_free' => 'Is Delivery Free',
            'cate_id' => 'Cate ID',
            'brand_id' => 'Brand ID',
            'is_new' => 'Is New',
            'is_hot' => 'Is Hot',
            'is_del' => 'Is Del',
            'exp' => 'Exp',
            'del_time' => 'Del Time',
        ];
    }
}
