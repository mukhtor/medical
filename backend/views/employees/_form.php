<?php

use common\models\Position;
use common\models\Sections;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">


            <?php $form = ActiveForm::begin(); ?>

git
            <?= $form->field($model, 'fullname_en')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'fullname_ru')->textInput(['maxlength' => true]) ?>



            <?= $form->field($model, 'section_id')->widget(Select2::class, [
                'data' => ArrayHelper::map(Sections::find()->all(), 'id', 'name_uz'),
                'options' => ['placeholder' => 'Select a Menu ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>


            <?= $form->field($model, 'position_id')->widget(Select2::class, [
                'data' => ArrayHelper::map(Position::find()->all(), 'id', 'name_uz'),
                'options' => ['placeholder' => 'Select a Menu ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>


            <?= $form->field($model, 'phone_1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone_2')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'data_birth')->textInput() ?>

            <?= $form->field($model, 'address_birth')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'completed_institution')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'spec')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'degree')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

