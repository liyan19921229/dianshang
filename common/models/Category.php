<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "five2_category".
 *
 * @property integer $cate_id
 * @property string $cate_name
 * @property integer $cate_pid
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'five2_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_pid'], 'integer'],
            [['cate_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => 'Cate ID',
            'cate_name' => 'Cate Name',
            'cate_pid' => 'Cate Pid',
        ];
    }
}
