<?php

namespace common\models;

use common\models\query\ServicesQuery;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property int|null $section_id
 * @property string|null $name_uz
 * @property string|null $name_en
 * @property string|null $name_ru
 * @property string|null $uz_measurement
 * @property string|null $ru_measurement
 * @property string|null $en_measurement
 * @property string|null $uz_price
 * @property string|null $eu_price
 * @property int|null $date
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id','uz_price','eu_price','date','name_uz','uz_measurement'],'required'],
            [['section_id',  'created_at', 'updated_at'], 'integer'],
            [['name_uz', 'name_en', 'name_ru'], 'string', 'max' => 255],
            [['uz_measurement', 'ru_measurement', 'en_measurement'], 'string', 'max' => 100],
            [['uz_price', 'eu_price'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'uz_measurement' => Yii::t('app', 'Uz Measurement'),
            'ru_measurement' => Yii::t('app', 'Ru Measurement'),
            'en_measurement' => Yii::t('app', 'En Measurement'),
            'uz_price' => Yii::t('app', 'Uz Price'),
            'eu_price' => Yii::t('app', 'Eu Price'),
            'date' => Yii::t('app', 'Date'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ServicesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServicesQuery(static::class);
    }
    public function getSection(){
        return $this->hasOne(Sections::class,['id'=>'section_id']);
    }
}
