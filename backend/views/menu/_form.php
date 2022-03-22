<?php

use common\models\Menu;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent')->widget(Select2::class,[
            'data' => ArrayHelper::map(Menu::find()->where(['parent'=>null])->all(),'id','name_uz'),
        'options' => ['placeholder' => 'Select a Menu ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>
    <?=$form->field($model,'status')->dropDownList([
            10=>'Menu',
            9=>'Category'
    ],[
            'prompt'=>'Menu Turini Tanlang'
    ])?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
