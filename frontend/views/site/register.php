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
?>
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

                    <!-- <ul class="list-inline breadcumb-nav">
                      <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                      <li class="list-inline-item"><span class="text-white">/</span></li>
                      <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="appoinment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3">Biz Bilan Aloqa!</span>
                    <h2 class="text-color mt-3">+99862-228-10-65<br>
                        +99862-228-11-22
                    </h2>
                    <h4 class="text-color mt-3">xvkttm@gmail.com</h4>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Online Navbatga Yozilish</h2>
                    <p class="mb-4">Siz istalgan shifokoringiz huzuriga online navbatga yozilishingiz mumkin. Buning uchun quyidagi ma'lumotlarni to'ldiring!!!</p>
                    <?php $form = ActiveForm::begin(['options' => ['class'=>'appoinment-form']]); ?>

                    <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?=$form->field($register,'section_id')->dropDownList(
                                            ArrayHelper::map(Sections::find()->where(['status'=>10])->all(),'id','name_uz')
                                        , ['id'=>'cat-id','prompt'=>'--Bo\'limni Tanlang--'])->label(false)?>
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
                                    <?= $form->field($register, 'fullname')->textInput(['placeholder'=>'To\'liq ism sharifingiz'])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $form->field($register, 'email')->input('email',['placeholder'=>'Elektron manzilingiz'])->label(false) ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $form->field($register, 'phone')->widget(MaskedInput::class,[
                                            'mask' => '+99-999-999-99-99',
                                        'options' => [
                                                'placeholder'=>'Telefon Raqamingiz'
                                        ]
                                    ])->label(false) ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <?=$form->field($register,'information')->textarea(['placeholder'=>'Sizni qiynayotgan muommo haqida qisqacha'])->label(false)?>
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
