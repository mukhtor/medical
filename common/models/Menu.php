<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_en
 * @property string|null $name_ru
 * @property string|null $slug
 * @property string|null $url
 * @property int|null $parent
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Menu extends \yii\db\ActiveRecord
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
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz','name_en','name_ru'],'required'],
            [['parent', 'status', 'created_at', 'updated_at'], 'integer'],
            [['status'],'default','value' => self::ACTIVE_STATUS],
            [['name_uz', 'name_en', 'name_ru', 'slug', 'url'], 'string', 'max' => 200],
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
            'slug' => Yii::t('app', 'Slug'),
            'url' => Yii::t('app', 'Url'),
            'parent' => Yii::t('app', 'Parent'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\MenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\MenuQuery(get_called_class());
    }
}
