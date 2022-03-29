<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "register".
 *
 * @property int $id
 * @property int|null $section_id
 * @property int|null $employee_id
 * @property string|null $fullname
 * @property string|null $phone
 * @property string|null $email
 * @property int|null $date
 * @property string|null $information
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Register extends \yii\db\ActiveRecord
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
        return 'register';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id','employee_id','date','fullname','phone','information','email'],'required'],
            [['section_id', 'employee_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['information'], 'string'],
            [['status'], 'default', 'value' => self::ACTIVE_STATUS],
            [['fullname'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 200],
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
            'employee_id' => Yii::t('app', 'Employee ID'),
            'fullname' => Yii::t('app', 'Fullname'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'date' => Yii::t('app', 'Date'),
            'information' => Yii::t('app', 'Information'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RegisterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RegisterQuery(get_called_class());
    }


    public function getSections(){
        return $this->hasOne(Sections::class,['id'=>'section_id']);
    }
    public function getEmployees(){
       return $this->hasOne(Employees::class,['id'=>'employee_id']);
    }
}
