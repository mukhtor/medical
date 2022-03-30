<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $image
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Gallery extends \yii\db\ActiveRecord
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
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'],'required'],
            [['status', 'created_at', 'updated_at','type'], 'integer'],
            [['status'],'default','value' => self::ACTIVE_STATUS],
            [['name', 'image'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\GalleryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\GalleryQuery(get_called_class());
    }
}
