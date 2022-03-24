<?php

use common\models\Sections;
use yii\helpers\Url;

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
?>

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg"><?=Yii::t('app','Managers')?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section doctors">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2><?=Yii::t('app','Managers')?></h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>

        <div class="col-12 text-center  mb-5">
            <?php foreach (Sections::find()->where(['status'=>10])->all() as $value) :?>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="<?=$value->id?>" ><?=$value[$name]?>
                    </label>
                </div>
            <?php endforeach;?>
        </div>

        <div class="row shuffle-wrapper portfolio-gallery shuffle" >
            <?php foreach ($employees as $employee) :?>
                <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" >
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="<?=$employee->image?>" alt="doctor-image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="content mt-3">
                            <h4 class="mb-0 text-center"><a href="<?= Url::to(['site/employee-more','id'=>$employee->id])?>"><?=$employee[$fullname]?></a></h4>
                            <p class="text-center"><?=$employee->position[$name]?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<section class="section cta-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="cta-content">
                    <div class="divider mb-4"></div>
                    <h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
                    <a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>