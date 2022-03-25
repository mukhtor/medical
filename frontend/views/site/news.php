<?php

use yii\bootstrap4\LinkPager;
use yii\helpers\Url;

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$text = "text_" . Yii::$app->language;
$this->title = Yii::t('app','News');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    title {
        color: rgba(0, 0, 0, 0.7) !important;
    }

    .title :hover {
        color: rgba(122, 4, 4, 0.63);
        text-decoration: none;
    }

    .btn-red {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-red:hover {
        color: white;
        background-color: rgba(206, 19, 19, 0.67);
        border-color: rgba(241, 241, 241, 0.51);
    }
</style>

<section class="section blog-wrap">
    <div class="container" style="max-width: 70%!important;">
        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($news as $new): ?>
                    <div class="col-lg-12 col-md-12 mb-5">
                        <div class="blog-item row">
                            <div class="col-lg-6">
                                <div class="blog-thumb">
                                    <a href="<?= Url::to(['site/news-more', 'id' => $new->id]) ?>"><img src="<?= $new->image ?>" alt="" class="img-fluid "></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-item-content">
                                    <h5 class="title"><a href="<?= Url::to(['site/news-more', 'id' => $new->id]) ?>"><?= $new[$title] ?></a></h5>
                                    <div class="blog-item-meta">
                                        <span class="text-muted text-capitalize mr-3"><i class="icofont-eye-alt mr-2"></i><?=$new->show_count?></span>
                                        <span class="text-black text-capitalize mr-3"><i
                                                    class="icofont-calendar mr-1"></i><?= date('d M Y', $new->created_at) ?></span>
                                    </div>
                                    <p><?php $text = mb_substr($new->text_uz, 0, 295);
                                        print $text."</em>";
                                        ?>...</p>

                                    <a href="<?= Url::to(['site/news-more', 'id' => $new->id]) ?>"
                                       class="btn btn-red"><?= Yii::t('app', 'Read More') ?> <i
                                                class="icofont-simple-right ml-2"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <nav class="pagination py-2 d-inline-block">
                            <div class="nav-links">
                                <?= LinkPager::widget([
                                    'pagination' => $pages,
                                ]); ?>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>


            <div class="col-lg-4">

                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-widget search  mb-3 ">
                        <h5><?=Yii::t('app','Search')?></h5>
                        <form action="<?=Url::to(['site/search'])?>" class="search-form">
                            <input type="text" class="form-control" name="query" placeholder="search">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="sidebar-widget tags mb-3">
                        <h5 class="mb-4"><?=Yii::t('app','Tags')?></h5>
                        <?php foreach ($menu as $value): ?>
                            <a href="#"><?= $value->name_uz ?></a>
                        <?php endforeach; ?>
                    </div>


<!--                    <div class="sidebar-widget schedule-widget mb-3">-->
<!--                        <h5 class="mb-4">Time Schedule</h5>-->
<!---->
<!--                        <ul class="list-unstyled">-->
<!--                            <li class="d-flex justify-content-between align-items-center">-->
<!--                                <a href="#">Monday - Friday</a>-->
<!--                                <span>9:00 - 17:00</span>-->
<!--                            </li>-->
<!--                            <li class="d-flex justify-content-between align-items-center">-->
<!--                                <a href="#">Saturday</a>-->
<!--                                <span>9:00 - 16:00</span>-->
<!--                            </li>-->
<!--                            <li class="d-flex justify-content-between align-items-center">-->
<!--                                <a href="#">Sunday</a>-->
<!--                                <span>Closed</span>-->
<!--                            </li>-->
<!--                        </ul>-->
<!---->
<!--                        <div class="sidebar-contatct-info mt-4">-->
<!--                            <p class="mb-0">Need Urgent Help?</p>-->
<!--                            <h3>+998 62-228-11-22</h3>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>

    </div>
</section>
