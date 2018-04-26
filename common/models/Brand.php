<?php

namespace common\models;

use Yii;
use common\models\Type;

/**
 * This is the model class for table "five2_brand".
 *
 * @property integer $brand_id
 * @property string $brand_name
 * @property string $brand_logo
 * @property string $brand_url
 * @property string $brand_desc
 * @property integer $sort
 * @property integer $type_id
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'type_id'], 'integer'],
            [['brand_name'], 'string', 'max' => 30],
            [['brand_logo'], 'string', 'max' => 200],
            [['brand_url'], 'string', 'max' => 50],
            [['brand_desc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'brand_id' => 'Brand ID',
            'brand_name' => 'Brand Name',
            'brand_logo' => 'Brand Logo',
            'brand_url' => 'Brand Url',
            'brand_desc' => 'Brand Desc',
            'sort' => 'Sort',
            'type_id' => 'Type ID',
        ];
    }


    /*两表联查*/
    public function getType(){
        return $this->hasOne(Type::className(), ['type_id'=>'type_id']);
    }



}
