<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "five2_nav".
 *
 * @property integer $nav_id
 * @property string $nav_name
 * @property integer $is_show
 * @property integer $sort
 */
class Nav extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_nav';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_show', 'sort'], 'integer'],
            [['nav_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nav_id' => 'Nav ID',
            'nav_name' => 'Nav Name',
            'is_show' => 'Is Show',
            'sort' => 'Sort',
        ];
    }
}
