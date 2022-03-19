<?php

use common\models\Employees;
use common\models\Sections;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\Register */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="register-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section_id')->widget(Select2::class,[
            'data' => ArrayHelper::map(Sections::find()->all(),'id','name_uz'),
        'options' => ['placeholder' => 'Select a Sections ...'],
    ]) ?>

    <?= $form->field($model, 'employee_id')->widget(Select2::class,[
        'data' => ArrayHelper::map(Employees::find()->all(),'id','fullname_uz'),
        'options' => ['placeholder' => 'Select a Sections ...'],
    ]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->widget(MaskedInput::class,[
            'mask'=>'+99-999-999-99-99'
    ]) ?>

    <?= $form->field($model, 'email')->input('email') ?>

    <?= $form->field($model,'created_at')->widget(DatePicker::class,[

    ])?>

    <?= $form->field($model, 'information')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
