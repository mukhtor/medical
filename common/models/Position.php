<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "position".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_en
 * @property string|null $name_ru
 * @property int|null $status
 * @property int|null $degree
 * @property int|null $type
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Position extends \yii\db\ActiveRecord
{

    const ACTIVE_STATUS = 10;
    const DEACTIVE_STATUS = 9;
    const DELETE_STATUS = 0;
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz','name_ru','name_en','degree'],'required'],
            [['status', 'created_at', 'updated_at','degree','type'], 'integer'],
            [['status'],'default','value' => self::ACTIVE_STATUS],
            [['name_uz', 'name_en', 'name_ru'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PositionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PositionQuery(get_called_class());
    }
}
