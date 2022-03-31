<?php

use yii\helpers\VarDumper;

$this->title = Yii::t('app','Management');
$this->params['breadcrumbs'][] = $this->title;

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;

/* @var $this \yii\web\View */
/* @var $management \common\models\Employees */
?>
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <p><?=Yii::t('app','You can get acquainted with the management of our medical center on this page')?>!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2 slick-initialized slick-slider slick-dotted">
                <?php foreach ($management as $value):?>

                    <div class="slick-list draggable">
                    <div class="slick-track">

                        <div class="testimonial-block style-2 gray-bg " >
                            <div class="row">
                                <div class="col-lg-3">
                                    <img style="width: 90%;height: 90%" src="<?=$value->image?>" alt="">
                                </div>

                                <div class="col-lg-9">
                                    <h4><?=$value[$fullname]?></h4>
                                    <span><?=$value->position[$name]?></span>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <strong><?=Yii::t('app','Phone')?></strong>
                                            <p><?=$value->phone_1?></p>
                                        </div>

                                        <div class="col-lg-3">
                                            <strong><?=Yii::t('app','Specialty')?></strong>
                                            <p><?=$value->spec?></p>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <strong><?=Yii::t('app','Email')?></strong>
                                            <p><?=$value->email?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <a  style="border: 1px rgba(96,93,93,0.22) dashed;width: 15%;text-align: center;border-radius: 8%;padding: 1%" href="<?=\yii\helpers\Url::to(['site/employee-more','id'=>$value->id])?>"><?=Yii::t('app','Read more')?></a>

                        </div>

                    </div>
                        <?php endforeach;?>

                    </div>

            </div>
        </div>
    </div>
</section>
