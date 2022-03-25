<?php

use common\models\Employees;
use common\models\Sections;
use yii\helpers\Url;

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$desc = "desc_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
$this->title = Yii::t('app','Sections More');
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['site/news']];
$this->params['breadcrumbs'][] = $more->id;
?>

<section class="section department-single blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-widget category mb-3">
                        <h5 class="mb-4"><?=Yii::t('app','Departments')?></h5>
                        <ul class="list-unstyled">
                            <?php foreach (Sections::find()->where(['status'=>10])->all() as $value):?>
                            <li class="align-items-center">
                                <a href="<?= Url::to(['site/section-more','id'=>$value->id])?>"><?=$value[$name]?></a>
                                <span><?= Employees::find()->where(['section_id'=>$value->id])->count()?></span>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>


                    <div class="sidebar-widget tags mb-3">
                        <h5 class="mb-4">Xodimlar</h5>

                        <?php foreach (Employees::find()->where(['section_id'=>$more->id])->all() as $value) :?>
                        <a href="<?=Url::to(['site/employee-more','id'=>$value->id])?>"><?=$value[$fullname]?></a>
                        <?php endforeach;?>
                    </div>

                </div>
            </div>
          <div class="col-md-8">
              <div class="col-lg-12">
                  <div class="department-img">
                      <img src="<?=$more->image?>" alt="" class="img-fluid">
                  </div>
                  <div class="department-content mt-5">
                      <h3 class="text-md"><?=$more[$name]?></h3>
                      <div class="divider my-4"></div>
                      <p class="lead"><?=$more[$desc]?></p>
                  </div>
              </div>
          </div>
        </div>
    </div>
</section>

