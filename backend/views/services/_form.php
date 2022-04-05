<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section_id')->widget(\kartik\select2\Select2::class, [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\Sections::find()->where(['status' => 10])->all(), 'id', 'name_uz'),
        'options' => ['placeholder' => 'Select a Section ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>


    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'uz_measurement')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'ru_measurement')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'en_measurement')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'uz_price')->widget(MaskedInput::class,[
                'mask' => '9',
                'clientOptions' => ['repeat' => 10, 'greedy' => false]
            ]) ?>

        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'eu_price')->widget(MaskedInput::class,[
                'mask' => '9',
                'clientOptions' => ['repeat' => 10, 'greedy' => false]
            ]) ?>

        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'date')->widget(DatePicker::class, [

            ]) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
