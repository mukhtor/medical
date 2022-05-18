<?php

use common\models\Employees;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput()->label('Foydalanuvchi Nomi') ?>

    <?= $form->field($model, 'password_hash')->textInput()->label('Foydalanuvchining Paroli') ?>
    <?= $form->field($model, 'email')->textInput()->label('Elektron Pochta') ?>

    <?= $form->field($model, 'role')->dropDownList([
        10 => 'Administrator',
        9 => 'Tahrirchilar',
        8 => 'Shifokor',
    ], ['prompt' => '--Role ni tanlang--'])->label('Foydalanuvchi Roli') ?>

    <?= $form->field($model, 'status')->dropDownList([
        10 => 'Active',
        9 => 'DeActive',
    ], ['prompt' => '--Status ni tanlang--'])->label('Foydalanuvchi Roli') ?>

    <div class="employee" style="display: none">
        <?= $form->field($model, 'employee_id')->widget(Select2::class, [
            'data' => ArrayHelper::map(Employees::find()->all(), 'id', 'fullname_uz'),
            'options' => ['placeholder' => 'Select a Menu ...', 'id' => 'employee'],
            'pluginOptions' => [
                'allowClear' => true,
                'style' => 'display:none'
            ],
        ]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // var e = document.getElementById('user-role');
    // function show(){
    //     if (e.value == 8){
    //         console.log(document.getElementById('employee'))
    //     }
    // }
    // e.onchange=show;
    $(document).ready(function () {

        $('#user-role').change(function () {
            if ($('#user-role').val() == 8) {
                $(".employee").show();
            }else {
                $(".employee").hide();
                // alert($(".employee").val(''));

            }
        })
        // $("#hide").click(function(){
        //     $("p").hide();
        // });
        //
        // $("#show").click(function(){
        //     $("p").show();
        // });

    });
</script>

