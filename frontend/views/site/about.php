<?php

/** @var yii\web\View $this */

use common\models\Employees;
use yii\helpers\Html;

$this->title = Yii::t('app','Institution').' '.Yii::t('app','About');
$name = "name_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
?>

<section class="section testimonial my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="section-title">
                    <h2 class="mb-4"><?=Yii::t('app','Khorezm Regional Multidisciplinary Medical Center')?></h2>
                    <div class="divider  my-4"></div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 testimonial-wrap offset-lg-6 slick-initialized slick-slider slick-dotted slick-vertical">
                <div class="slick-list draggable" style="height: 233.594px;">
                    <div class="slick-track">
                        <div class="testimonial-block slick-slide slick-cloned" style="width: 540px;">

                            <p style="font-size: 24px">
<?=Yii::t('app','
It consists of 412 sanatoriums, consisting of 14 treatment departments, consulting polyclinic and diagnostics, rehabilitation, laboratory, internal pharmacy and other ancillary departments. At present, the center has 151 doctors, 556 nurses and 278 junior medical staff.
')?>
                            </p>
                            <i class="icofont-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="container">
        <h2 class="text-center">
            <?=Yii::t('app','Construction and repair works carried out under the innovative program.')?>
        </h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th><?=Yii::t('app','Year')?></th>
                <th><?=Yii::t('app','Reconstruction')?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2015</td>
                <td><?=Yii::t('app','The Consultative Polyclinic and Diagnostic Departments have been reconstructed')?></td>
            </tr>
            <tr>
                <td>2016</td>
                <td><?=Yii::t('app','The therapy block with 207 beds was reconstructed.')?></td>
            </tr>
            <tr>
                <td>2018</td>
                <td>
                    <?=Yii::t('app','The Department of Otorhinolaryngology and Oral and Maxillofacial Surgery, the Laboratory, the Internal Pharmacy and the Blood Bank were reconstructed.')?>
                </td>
            </tr>
            <tr>
                <td>2020</td>
                <td><?=Yii::t('app','As of August 31, 2020, the Surgery Unit and Admissions Department, consisting of 170 sanatoriums, have been reconstructed and put into operation.')?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="title-color"><?=Yii::t('app','Chief Physician')?>:
                </h3>
            </div>
            <div class="col-lg-8">
                <h4>Egamberdiyev Shuhrat Iskandarovich <p style="font-style: italic"><?=Yii::t('app','"Candidate of Medical Sciences"')?></p></h4>
                <img src="/style/images/about/sign.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="section team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4"><?=Yii::t('app','At our medical center')?> <?=Yii::t('app','Managers')?></h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach (Employees::find()->where(['position_id' => 1])->all() as $item): ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-block mb-5 mb-lg-0">
                        <img src="<?=$item->image?>" alt="" class="img-fluid w-100">

                        <div class="content">
                            <h4 class="mt-4 mb-0 text-center"><a href="doctor-single.html"><?=$item[$fullname]?></a></h4>
                            <p class="text-center"><?=$item->position[$name]?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
