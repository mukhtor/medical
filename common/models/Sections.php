<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "sections".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_en
 * @property string|null $name_ru
 * @property string|null $desc_uz
 * @property string|null $desc_en
 * @property string|null $desc_ru
 * @property string|null $image
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Sections extends \yii\db\ActiveRecord
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
        return 'sections';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz','name_en','name_ru','desc_uz','desc_ru','desc_en','image'],'required'],
            [['desc_uz', 'desc_en', 'desc_ru'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['status'], 'default', 'value' => self::ACTIVE_STATUS],
            [['name_uz', 'name_en', 'name_ru', 'image'], 'string', 'max' => 255],
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
            'desc_uz' => Yii::t('app', 'Desc Uz'),
            'desc_en' => Yii::t('app', 'Desc En'),
            'desc_ru' => Yii::t('app', 'Desc Ru'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SectionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SectionsQuery(get_called_class());
    }
}
