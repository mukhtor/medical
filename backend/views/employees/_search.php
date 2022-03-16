<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\EmployeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fullname_uz') ?>

    <?= $form->field($model, 'fullname_en') ?>

    <?= $form->field($model, 'fullname_ru') ?>

    <?= $form->field($model, 'section_id') ?>

    <?php // echo $form->field($model, 'position_id') ?>

    <?php // echo $form->field($model, 'phone_1') ?>

    <?php // echo $form->field($model, 'phone_2') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'data_birth') ?>

    <?php // echo $form->field($model, 'address_birth') ?>

    <?php // echo $form->field($model, 'completed_institution') ?>

    <?php // echo $form->field($model, 'spec') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
