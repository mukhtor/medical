<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use common\models\Sections;
use kartik\depdrop\DepDrop;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\MaskedInput;

$this->title = Yii::t('app','Ma\'lumotlarimiz');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="section contact-info pb-0">
    <div class="container" style="max-width:70%">
        <div class="row">
            <div class="col-lg-8 col-sm-6 col-md-6">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color text-center">Online Navbatga Yozilish</h2>
                    <p class="mb-4 text-center">Siz istalgan shifokoringiz huzuriga online navbatga yozilishingiz mumkin. Buning uchun quyidagi ma'lumotlarni to'ldiring!!!</p>
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
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Call Us</h5>
                    +99862-228-10-65<br>
                    +99862-228-11-22
                </div>
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email Us</h5>
                    xvkttm@gmail.com
                </div>
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Location</h5>
                    HJ5M+WGX, Urganch, Uzbekistan
                </div>
            </div>

        </div>
    </div>
</section>
<hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11941.856966197643!2d60.632965277770985!3d41.55919614530905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfced40ff9fa85%3A0x41213b3ab751e15c!2z0J7QsdC70LDRgdGC0L3QsNGPINCR0L7Qu9GM0L3QuNGG0LA!5e0!3m2!1sru!2s!4v1648214313035!5m2!1sru!2s" width="1920" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>


