<?php

use common\models\Sections;
use common\models\Services;
use yii\helpers\Url;
use yii\helpers\VarDumper;

$name = "name_" . Yii::$app->language;
$measurement = Yii::$app->language . "_measurement";
$this->title = Yii::t('app', 'Markazda ko’rsatiladigan pullik tibbiy xizmatlar uchun NARXNOMA');
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
                    <h6 class="mb-2"><?= Yii::t('app', 'Sections') ?></h6>
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
                <h4 class="text-center"><?=Yii::$app->request->get('id') ? Sections::findOne(['id'=>Yii::$app->request->get('id')])[$name] : 'Barcha Bo\'limlar'?></h4>
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr>
                        <th>Pullik Xizmat Nomi</th>
                        <th>O'lchov Birligi</th>
                        <th>O'zbekiston Respublikasi fuqorolari uchun(dorilarsiz)</th>
                        <th>Chet el fuqorolari uchun(dorilarsiz)</th>
                        <th>Yangilangan Sana</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php foreach ($services as $service) : ?>
                        <tr>
                            <td><?=$service[$name]?></td>
                            <td><?=$service[$measurement]?></td>
                            <td><?=$service->uz_price?></td>
                            <td><?=$service->eu_price?></td>
                            <td><?=date('Y m-d',$service->date)?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>
