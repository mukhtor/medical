<?php

use common\models\Position;
use common\models\Sections;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use mihaildev\elfinder\InputFile;
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

            <?= $form->field($model, 'email')->input('email') ?>

            <?= $form->field($model,'data_birth')->widget(DatePicker::class,[

            ])?>

            <?= $form->field($model, 'address_birth')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'completed_institution')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'spec')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'degree')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'image')->widget(InputFile::class, [
                'language' => 'ru',
                'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                'filter' => 'image',
                // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                'options' => ['class' => 'form-control'],

                'buttonOptions' => ['class' => 'btn btn-default'],
                'multiple' => false,       // возможность выбора нескольких файлов

            ]); ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

