<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $text_en
 * @property string|null $image
 * @property int|null $author
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $show_count
 * @property int|null $status
 * @property string|null $cate_id
 */
class News extends \yii\db\ActiveRecord
{
    const ACTIVE_STATUS = 10;
    const DEACTIVE_STATUS = 9;
    const DELETE_STATUS = 0;

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
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz','text_uz','cate_id','image'],'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['author', 'updated_at', 'show_count', 'status'], 'integer'],
            [['cate_id'], 'safe'],
            [['text_ru','text_en','title_en','title_ru'],'default','value' => null],
            [['status'],'default','value' => self::ACTIVE_STATUS],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_en' => Yii::t('app', 'Text En'),
            'image' => Yii::t('app', 'Image'),
            'author' => Yii::t('app', 'Author'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'show_count' => Yii::t('app', 'Show Count'),
            'status' => Yii::t('app', 'Status'),
            'cate_id' => Yii::t('app', 'Cate ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewsQuery(get_called_class());
    }
    public function getCate(){
        return $this->hasMany(Menu::class,['id'=>'cate_id']);
    }
}
