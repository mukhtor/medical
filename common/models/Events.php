<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $title_ru
 * @property string|null $text_uz
 * @property string|null $text_en
 * @property string|null $text_ru
 * @property int|null $count
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Events extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz','title_en','title_ru','text_uz','text_ru','text_en','image'],'required'],
            [['text_uz', 'text_en', 'text_ru'], 'string'],
            [['count', 'created_at', 'updated_at'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['title_uz', 'title_en', 'title_ru'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'count' => Yii::t('app', 'Count'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EventsQuery(get_called_class());
    }
}
