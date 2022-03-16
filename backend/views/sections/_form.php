<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder as ElFinderAlias;


/* @var $this yii\web\View */
/* @var $model common\models\Sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">

            <?php $form = ActiveForm::begin(); ?>

            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <?= $form->field($model, 'desc_uz')->widget(CKEditor::className(), [
                'editorOptions' => ElFinderAlias::ckeditorOptions('elfinder', []),
            ]); ?>
            <?= $form->field($model, 'desc_ru')->widget(CKEditor::className(), [
                'editorOptions' => ElFinderAlias::ckeditorOptions('elfinder', []),
            ]); ?>
            <?= $form->field($model, 'desc_en')->widget(CKEditor::className(), [
                'editorOptions' => ElFinderAlias::ckeditorOptions('elfinder', []),
            ]); ?>

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

