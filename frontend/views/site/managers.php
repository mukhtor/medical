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
        <div class="row">
            <div class="col-lg-12">
                <div class="row shuffle-wrapper portfolio-gallery shuffle">
                    <?php foreach ($employees as $employee) : ?>
                        <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible">
                            <div class="position-relative doctor-inner-box">
                                <div class="doctor-profile">
                                    <div class="doctor-img">
                                        <img src="<?= $employee->image ?>" alt="doctor-image" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="content mt-3">
                                    <h4 class="mb-0 text-center"><a
                                                href="<?= Url::to(['site/employee-more', 'id' => $employee->id]) ?>"><?= $employee[$fullname] ?></a>
                                    </h4>
                                    <p class="text-center"><?= $employee->position[$name] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </div>
</section>

