<?php

use common\models\Employees;
use common\models\Sections;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $register common\models\Employees */
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::t('app','Register');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="appoinment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3"><?=Yii::t('app','Contact US')?>!</span>
                    <h3 class="text-color mt-3">+99862-228-10-65<br>
                        +99862-228-11-22
                    </h3>
                    <h4 class="text-color mt-3">xvkttm@gmail.com</h4>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color"><?=Yii::t('app','Online admission')?></h2>
                    <p class="mb-4"><?=Yii::t('app','You can make an online queue at any doctor’s office. To do this, fill in the information below !!!')?></p>
                    <?php $form = ActiveForm::begin(['options' => ['class'=>'appoinment-form']]); ?>

                    <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?=$form->field($register,'section_id')->dropDownList(
                                            ArrayHelper::map(Sections::find()->where(['status'=>10])->all(),'id','name_uz')
                                        , ['id'=>'cat-id','prompt'=>'--'.Yii::t('app','Select Section').'--'])->label(false)?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?=$form->field($register,'employee_id')->widget(DepDrop::class, [
                                        'options'=>['id'=>'subcat-id'],
                                        'pluginOptions'=>[
                                            'depends'=>['cat-id'],
                                            'placeholder'=>'Select...',
                                            'url'=>Url::to(['/site/subcat'])
                                        ]
                                    ])->label(false)?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $form->field($register, 'date')->input('date')->label(false) ?>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $form->field($register, 'fullname')->textInput(['placeholder'=>Yii::t('app','Full Name')])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $form->field($register, 'email')->input('email',['placeholder'=>Yii::t('app','Email')])->label(false) ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $form->field($register, 'phone')->widget(MaskedInput::class,[
                                            'mask' => '+99-999-999-99-99',
                                        'options' => [
                                                'placeholder'=>Yii::t('app','Phone')
                                        ]
                                    ])->label(false) ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <?=$form->field($register,'information')->textarea(['placeholder'=>Yii::t('app','Briefly about the problem that is bothering you')])->label(false)?>
                        </div>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-info']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>

</section>
