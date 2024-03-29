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
                                    <a href="<?= Url::to(['site/news-more', 'id' => $new->id]) ?>">
                                        <?php if (!$new->image): ?>
                                        <img style="width: 100%;" src="/default-image.png">
                                        <?php else:?>
                                        <img style="width: 100%;" src="<?= $new->image ?>" alt="" >
                                        <?php endif;?>
                                    </a>
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
                                    <a href="<?= Url::to(['site/news-more', 'id' => $new->id]) ?>">
                                    <p><?= strip_tags(mb_substr($new->text_uz, 0, 295))?>...</p>
                                    </a>

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
                        <h5 class="mb-4"><?=Yii::t('app','Departments')?></h5>
                        <?php foreach ($menu as $value): ?>
                            <a href="#"><?= $value->name_uz ?></a>
                        <?php endforeach; ?>
                    </div>

                    <div class="sidebar-widget latest-post mb-3">
                        <h5><?=Yii::t('app','Latest Events')?></h5>

                        <?php foreach (\common\models\Events::find()->orderBy(['created_at' => SORT_DESC])->limit(5)->all() as $item): ?>
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
