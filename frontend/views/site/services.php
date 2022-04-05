<?php

use common\models\Sections;
use common\models\Services;
use yii\helpers\Url;
use yii\helpers\VarDumper;

$name = "name_" . Yii::$app->language;
$measurement = Yii::$app->language . "_measurement";
$this->title = Yii::t('app', 'Paid Services');
$this->params['breadcrumbs'][] = ['label' => $this->title];
?>

<style>
    .features {
        margin-top: 100px;
        margin-bottom: 100px;
    }
</style>
<section class="features">
    <div class="container" style="max-width: 70%!important;">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar-widget category mb-3">
                    <h5 class="mb-4"><?= Yii::t('app', 'Sections') ?></h5>
                    <ul class="list-unstyled">
                        <?php
                        foreach (Sections::find()
                                     ->andFilterWhere(['status' => 10])
                                     ->andFilterWhere(['id' => Services::find()->select('DISTINCT(section_id)')->asArray()->column()])
                                     ->all()
                                 as $value):
                            ?>
                            <li class="align-items-center">
                                <a href="<?= Url::to(['site/services', 'id' => $value->id]) ?>"><?= $value[$name] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row d-lg-flex">

                    <?php foreach ($services as $service) : ?>
                        <div class="col-lg-6 mb-30">
                            <div class="feature-item mb-5 mb-lg-0">
                                <div class="feature-icon mb-4">
                                    <i class="icofont-dollar"></i>
                                </div>
                                <h4 class="mb-3"><?= @$service->section[$name] ?></h4>
                                <ul class="w-hours list-unstyled">
                                    <li class="d-flex justify-content-between"><strong><?= Yii::t('app', 'Name') ?>
                                            :</strong><span><?= $service[$name] ?></span></li>
                                    <li class="d-flex justify-content-between"><strong
                                                style="width: 70%"><?= Yii::t('app', 'Price Uz') ?>
                                            :</strong><span><?= $service->uz_price ?></span></li>
                                    <li class="d-flex justify-content-between">
                                        <strong><?= Yii::t('app', 'Price Euro') ?>
                                            :</strong><span><?= $service->eu_price ?></span></li>
                                    <li class="d-flex justify-content-between">
                                        <strong><?= Yii::t('app', 'Unit of Measurement') ?>
                                            :</strong><span><?= $service[$measurement] ?></span></li>
                                    <li class="d-flex justify-content-between">
                                        <strong><?= Yii::t('app', 'Updated date') ?>
                                            :</strong><span><?= date('Y m-d', $service->date) ?></span></li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
