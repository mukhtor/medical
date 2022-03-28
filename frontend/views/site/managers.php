<?php

use common\models\Sections;
use yii\helpers\Url;

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
$this->title = Yii::t('app','Managers');
$this->params['breadcrumbs'][] = $this->title;
?>

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

