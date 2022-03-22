<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string|null $fullname_uz
 * @property string|null $fullname_en
 * @property string|null $fullname_ru
 * @property int|null $section_id
 * @property int|null $position_id
 * @property string|null $phone_1
 * @property string|null $phone_2
 * @property string|null $email
 * @property string|null $data_birth
 * @property string|null $address_birth
 * @property string|null $completed_institution
 * @property string|null $spec
 * @property string|null $degree
 * @property string|null $image
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Employees extends \yii\db\ActiveRecord
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
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id', 'position_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['data_birth'], 'safe'],
            [['status'],'default','value' => self::ACTIVE_STATUS],
            [['fullname_uz', 'fullname_en', 'fullname_ru', 'email', 'address_birth', 'completed_institution', 'spec', 'degree'], 'string', 'max' => 255],
            [['phone_1', 'phone_2', 'image'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fullname_uz' => Yii::t('app', 'Fullname Uz'),
            'fullname_en' => Yii::t('app', 'Fullname En'),
            'fullname_ru' => Yii::t('app', 'Fullname Ru'),
            'section_id' => Yii::t('app', 'Section ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'phone_1' => Yii::t('app', 'Phone  1'),
            'phone_2' => Yii::t('app', 'Phone  2'),
            'email' => Yii::t('app', 'Email'),
            'data_birth' => Yii::t('app', 'Data Birth'),
            'address_birth' => Yii::t('app', 'Address Birth'),
            'completed_institution' => Yii::t('app', 'Completed Institution'),
            'spec' => Yii::t('app', 'Spec'),
            'degree' => Yii::t('app', 'Degree'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EmployeesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EmployeesQuery(get_called_class());
    }
    public function getPosition(){
        return $this->hasOne(Position::class,['id'=>'position_id']);
    }
}
