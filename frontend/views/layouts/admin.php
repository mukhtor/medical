<?php

/** @var \yii\web\View $this */

/** @var string $content */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use common\models\Menu;
use common\widgets\Alert;
use frontend\assets\AdminAsset;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AdminAsset::register($this);

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$menus = Menu::find()->where(['parent' => null])->andWhere(['status' => 10])->all()
?>
<?php $this->beginPage() ?>
    <html lang="zxx">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title>Xorazm Tibbiyot Markazi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
              integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <?php $this->head() ?>
    </head>
    <body id="top">
    <?php $this->beginBody() ?>

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i
                                            class="icofont-support-faq mr-2"></i>xvkttm@gmail.com</a></li>

                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>HJ5M+WGX, Urganch,
                                Uzbekistan
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890">
                                <span><?=Yii::t('app','Fast Communication')?>: </span>
                                <span class="h6">+99862-228-10-65</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?= Url::to(['/']) ?>">
                    <!--                    <img src="-->
                    <?php //= '/style/images/logo.png'?><!--" alt="" class="img-fluid">-->
                    <h4 style="font-size: 32px;"><i class="icofont-medical-sign-alt"></i> XVKTTM.UZ</h4>
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                        aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <?php foreach ($menus as $menu) : ?>
                            <li class="nav-item dropdown">

                                <a class="nav-link" href="<?= Url::to([$menu->url]) ?>"><?= $menu[$name] ?></a>
                                <?php foreach (Menu::find()->where(['not', ['parent' => null]])->where('parent=' . $menu->id)->all() as $item): ?>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="<?= Url::to([$item->url]) ?>"><?= $item[$name] ?></a></li>
                                    </ul>
                                <?php endforeach; ?>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                    <ul class="pull-right">
                        <?= MultiLanguageWidget::widget([
                            'widget_type' => 'classic', // classic or selector
                            'image_type' => 'classic', // classic or rounded
                            'width' => '25',
                            'calling_controller' => $this->context
                        ]); ?>
                    </ul>
                    <ul class="pull-right">
                        <div class="row">
                            <div class="col-lg-6">
                                <a title="Ko'zi ojizlar uchun" style="color: rgba(63,61,61,0.68)" href="#" class="dropdown open " data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="true">
                                    <i class="fa fa-eye "></i>
                                </a>

                                <div class="dropdown-menu styledDrop dropdown-menu-right specialViewArea no-propagation">
                                    <div class="appearance">
                                        <p class="specialTitle">Turi</p>

                                        <div class="squareAppearances">
                                            <div class="squareBox spcNormal" data-toggle="tooltip" data-placement="bottom"
                                                 title="" data-original-title="Odatiy rejim">A
                                            </div>
                                        </div>
                                        <div class="squareAppearances">
                                            <div class="squareBox spcWhiteAndBlack" data-toggle="tooltip"
                                                 data-placement="bottom" title="" data-original-title="Oq-qora rejimi">A
                                            </div>
                                        </div>
                                        <div class="squareAppearances">
                                            <div class="squareBox spcDark" data-toggle="tooltip" data-placement="bottom"
                                                 title="" data-original-title="Qorong'i rejimi">A
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <a href="#" title="Mobil Versiya " style="color: rgba(63,61,61,0.68)" class="adaptive"><i class="fa fa-mobile-alt"></i></a>
                            </div>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">

        <?php if ($this->title != 'My Yii Application'): ?>
            <section class="page-title bg-1">
                <div class="overlay"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <h1 class="text-capitalize mb-5 text-lg"><?= Yii::t('app', $this->title) ?></h1>
                            <p class="text-white">
                                <?= Breadcrumbs::widget([
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    'options' => [
                                        'class' => 'my-1',
                                        'style' => 'background:white'
                                    ]
                                ]) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>



        <?= Alert::widget() ?>
        <?= $content ?>

    </main>
    <!-- footer Start -->

    <footer class="footer section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <a class="navbar-brand" href="<?= Url::to(['/']) ?>">
                                <h4 style="font-size: 32px;"><i class="icofont-medical-sign-alt"></i> XVKTTM.UZ</h4>
                            </a>
                        </div>
                        <p><?=Yii::t('app','Khorezm Regional Multidisciplinary Medical Center')?></p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                            class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                            class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                            class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3"><?=Yii::t('app','Departments')?></h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="<?= Url::to(['site/about']) ?>"><?= Yii::t('app', 'Institution') ?></a></li>
                            <li><a href="<?= Url::to(['site/section']) ?>"><?= Yii::t('app', 'Sections') ?></a></li>
                            <li><a href="<?= Url::to(['site/employee']) ?>"><?= Yii::t('app', 'Employees') ?></a></li>
                            <li><a href="<?= Url::to(['site/news']) ?>"><?= Yii::t('app', 'News') ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <br>
                        <br>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="<?= Url::to(['site/gallery']) ?>"><?= Yii::t('app', 'Gallery') ?></a></li>
                            <li><a href="<?= Url::to(['site/video']) ?>"><?= Yii::t('app', 'Video') ?></a></li>
                            <li><a href="<?= Url::to(['site/register']) ?>"><?= Yii::t('app', 'Register') ?></a></li>
                            <li><a href="<?= Url::to(['site/contact']) ?>"><?= Yii::t('app', 'Contact') ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3"><?=Yii::t('app','Contact US')?></h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0"> <?=Yii::t('app','Service Time')?> 24/7</span>
                            </div>
                            <h4 class="mt-2"><a target="_blank" href="xvkttm@gmail.com">xvkttm@gmail.com</a></h4>
                        </div>

                        <div class="footer-contact-block ">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0"><?=Yii::t('app','Service Time')?> 24/7</span>
                            </div>
                            <h4 class="mt-3"><a href="tel:+99862-228-10-65">+99862-228-10-65</a></h4>
                            <h4 class="mt-2"><a href="tel:+99862-228-11-22">+99862-228-11-22</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
    <script>
        window.replainSettings = {id: 'd0de7570-d6e4-495c-8efe-fb7c470d470a'};
        (function (u) {
            var s = document.createElement('script');
            s.async = true;
            s.src = u;
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })('https://widget.replain.cc/dist/client.js');
    </script>
    </body>
    </html>
<?php $this->endPage() ?>