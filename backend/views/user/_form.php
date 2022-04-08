<?php

use common\models\Employees;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput()->label('Foydalanuvchi Nomi') ?>

    <?= $form->field($model, 'password_hash')->textInput()->label('Foydalanuvchining Paroli') ?>
    <?= $form->field($model, 'email')->textInput()->label('Elektron Pochta') ?>

    <?= $form->field($model, 'role')->dropDownList([
            10=>'Administrator',
            9=>'Tahrirchilar',
            8=>'Shifokor',
    ],['prompt'=>'--Role ni tanlang--'])->label('Foydalanuvchi Roli') ?>

    <?= $form->field($model,'employee_id')->widget(Select2::class,[
        'data' => ArrayHelper::map(Employees::find()->all(),'id','fullname_uz'),
        'options' => ['placeholder' => 'Select a Menu ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
