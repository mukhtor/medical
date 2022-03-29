<?php

use common\models\Menu;
use yii\helpers\Url;

$this->title = 'Events';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['site/events']];
$this->params['breadcrumbs'][] = $more->id;

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$text = "text_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
?>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            <img style="width: 100%" src="<?= $more->image ?>" alt="" class="img-fluid">

                            <div class="blog-item-content mt-5">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-color-2 text-capitalize mr-3"><i
                                                class="icofont-book-mark mr-2"></i> Equipment</span>
                                    <span class="text-muted text-capitalize mr-3"><i
                                                class="icofont-eye-alt mr-2"></i><?= $more->count ?></span>
                                    <span class="text-black text-capitalize mr-3"><i
                                                class="icofont-calendar mr-2"></i> <?= date('d M Y', $more->created_at) ?></span>
                                </div>

                                <h2 style="font-size: 24px;text-align: center"
                                    class="mb-4 text-md"><?= $more[$title] ?></h2>


                                <p>
                                    <?= $more[$text] ?>
                                </p>

<!--                                <div class="mt-5 clearfix">-->
<!---->
<!--                                    <ul class="float-right list-inline">-->
<!--                                        <li class="list-inline-item"> Share:</li>-->
<!--                                        <li class="list-inline-item"><a href="#" target="_blank"><i-->
<!--                                                        class="icofont-facebook" aria-hidden="true"></i></a></li>-->
<!--                                        <li class="list-inline-item"><a href="#" target="_blank"><i-->
<!--                                                        class="icofont-twitter" aria-hidden="true"></i></a></li>-->
<!--                                        <li class="list-inline-item"><a href="#" target="_blank"><i-->
<!--                                                        class="icofont-pinterest" aria-hidden="true"></i></a></li>-->
<!--                                        <li class="list-inline-item"><a href="#" target="_blank"><i-->
<!--                                                        class="icofont-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">

                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-widget search  mb-3 ">
                        <h5><?= Yii::t('app', 'Search') ?></h5>
                        <form action="<?= Url::to(['site/search']) ?>" class="search-form">
                            <input type="text" class="form-control" name="query" placeholder="search">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="sidebar-widget latest-post mb-3">
                        <h5><?=Yii::t('app','Latest News')?></h5>

                        <?php foreach (\common\models\News::find()->where(['status' => 10])->orderBy(['created_at' => SORT_DESC])->limit(5)->all() as $item): ?>
                            <div class="py-2">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <img src="<?= $item->image?>" class="img-fluid">
                                    </div>
                                    <div class="col-lg-7">
                                        <h6 class="my-2"><a href="#"><?=substr($item[$title],0,40)?>...</a></h6>
                                        <span class="text-sm text-muted"><?=date('Y m-d',$item->created_at)?></span>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
