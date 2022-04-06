<?php

/** @var yii\web\View $this */

/** @var Sections $sections */

/** @var News $latest_news */

use common\models\Employees;
use common\models\News;
use common\models\Sections;
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Url;

$this->title = 'My Yii Application';
$title = "title_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$desc = "desc_" . Yii::$app->language;
$text = "text_" . Yii::$app->language;
?>

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <h3 class="mb-4 pr-5" style="font-style: italic;color: rgba(0,0,0,0.54)">
                            "<?= Yii::t('app', 'Never delay treatment') ?>"<br><br>
                            “<?= Yii::t('app', 'The doctor should not be cowardly. Patients do not trust the weak person') ?>
                            ."
                        </h3><sub style="font-size: 20px">(<?= Yii::t('app', 'Hippocrates') ?>)</sub>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-5">
                    <div class="block widget mb-5 mb-lg-0">
                        <div class="divider mb-3"></div>
                        <ul class=" footer-menu lh-35" style="font-size: 20px">
                            <div class="row">
                                <div class="col-lg-6">
                                    <li class="my-3"><a target="_blank"
                                                        href="https://pm.gov.uz/uz#/"><?= Yii::t('app', 'Virtual Reception') ?></a>
                                    </li>
                                    <li class="my-3"><a target="_blank"
                                                        href="https://reg.ssv.uz/Chmu/Index"><?= Yii::t('app', 'Provision Of Preferential Services') ?></a>
                                    </li>
                                </div>
                                <div class="col-lg-6">
                                    <li class="my-3"><a target="_blank"
                                                        href="https://reg.ssv.uz/"><?= Yii::t('app', 'Electronic Polyclinic') ?></a>
                                    </li>
                                    <li class="my-3"><a target="_blank"
                                                        href="https://data.gov.uz/uz/sphere/2"><?= Yii::t('app', 'Health Facts And Figures') ?></a>
                                    </li>

                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span><?= Yii::t('app', 'Service 24 hours a day') ?></span>
                            <h4 class="mb-3"><?= Yii::t('app', 'About the institution ') ?></h4>
                            <p class="mb-4"><?= Yii::t('app', 'Equipped with the latest technology and equipment. High-class doctors are at your service') ?>
                                !</p>
                            <a href="<?= Url::to(['site/about']) ?>"
                               class="btn btn-main btn-round-full"><?= Yii::t('app', 'Read more') ?></a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <h4 class="mb-3"><?= Yii::t('app', 'Working hours ') ?></h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between"><?= Yii::t('app', 'Mon-Sat ') ?>: <span>08:00 – 18:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><?= Yii::t('app', 'Sun') ?> :
                                    <span><?= Yii::t('app', 'Closed') ?></span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span></span>
                            <h4 class="mb-3">+99862-228-10-65</h4>
                            <h4 class="mb-3">+99862-228-11-22</h4>
                            <p><?= Yii::t('app', 'We are happy to serve you') ?>!<br><strong>24/7</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="/style/image_1/photo_2021-06-23_16-02-39.jpg" alt="" class="img-fluid">
                        <img src="/style/image_1/photo_2021-06-23_16-03-06 (2).jpg" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="/style/image_1/photo_2021-06-23_16-03-01 (2).jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="/style/image_1/photo_2021-06-23_16-03-02.jpg" alt="" class="img-fluid">
                        <img src="/style/image_1/photo_2021-06-24_10-57-46 (2).jpg" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <!--            <div class="col-lg-4">-->
                <!--                <div class="about-content pl-4 mt-4 mt-lg-0">-->
                <!--                    <h2 class="title-color">Personal care <br>&amp; healthy living</h2>-->
                <!--                    <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti-->
                <!--                        ipsum officia dolores repellat laudantium obcaecati neque.</p>-->
                <!---->
                <!--                    <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i-->
                <!--                                class="icofont-simple-right ml-3"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3"><?= Sections::find()->count() ?></span>
                            <p><?= Yii::t('app', 'Sections') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3"><?= Employees::find()->count() ?></span>
                            <p><?= Yii::t('app', 'Employees') ?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3"><?= Employees::find()->where(['position_id' => 1])->count() ?></span>
                            <p><?= Yii::t('app', 'Managers ') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3"><?= News::find()->count() ?></span>
                            <p><?= Yii::t('app', 'News') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <div class="divider mx-auto my-4"></div>
                        <p><?= Yii::t('app', 'Latest News') ?></p>
                        <h2><?= Yii::t('app', 'News') ?></h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($latest_news as $news) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-block mb-5">
                            <img src="<?= $news->image ?>" alt="" class="img-fluid" style="width: 100%;height: 35%">
                            <div class="content">
                                <a href="" class="mb-4 list-unstyled footer-menu"></a>
                                <div class="widget">
                                    <ul class="list-unstyled footer-menu lh-35">
                                        <li><a style="text-decoration: none;font-weight: bold;font-size: 17px"
                                               href="<?= Url::to(['site/news-more', 'id' => $news->id]) ?>"><?= substr($news[$title], 0, 80) ?>
                                            </a></li>
                                    </ul>
                                </div>

                                <p><?= substr($news[$text], 0, 200) ?>...</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="mt-4 mb-2 title-color"><?= date('Y, m-d', $news->created_at) ?></h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 style="float: right" class="mt-4 mb-2 title-color"><i
                                                    class="icofont-eye-alt"> <?= $news->show_count ?></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <div class="text-center">
        <div class="widget mb-5 mb-lg-0">
            <ul class="list-unstyled footer-menu lh-35 taga">
                <li><a style="font-size: 28px"
                       href="<?= Url::to(['site/news']) ?>"><?= Yii::t('app', 'Read more') ?></a></li>
            </ul>
        </div>
    </div>
    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <div class="divider mx-auto my-4"></div>
                        <p><?= Yii::t('app', 'At our medical center') ?>.</p>
                        <h2><?= Yii::t('app', 'Sections') ?></h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($sections as $section) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="<?= Url::to(['site/section-more', 'id' => $section->id]) ?>">
                            <div class="service-item mb-4">
                                <div class="icon d-flex align-items-center sectionname">
                                    <i class="icofont-medical-sign-alt text-lg "></i>
                                    <h4 class="mt-3 mb-3"><?= $section[$name] ?></h4>
                                </div>

                                <div class="content text-center">
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section service-2 container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <div class="divider mx-auto my-4"></div>
                    <p><?= Yii::t('app', 'At our medical center') ?>.</p>
                    <h2><?= Yii::t('app', 'Managers') ?></h2>

                </div>
            </div>
        </div>
        <div class="row shuffle-wrapper portfolio-gallery shuffle">
         <?php foreach (Employees::find()->where(['position_id'=>1])->all() as $mudir):?>
            <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible">
                <div class="position-relative doctor-inner-box">
                    <div class="doctor-profile">
                        <div class="doctor-img">
                            <a href="<?=Url::to(['site/employee-more','id'=>$mudir->id])?>">
                            <img src="<?=$mudir->image?>" alt="doctor-image" class="img-fluid w-100" style="height: 70%">
                            </a>
                        </div>
                    </div>
                    <div class="content mt-3">
                        <h4 class="mb-0"><a href="<?=Url::to(['site/employee-more','id'=>$mudir->id])?>"><?=$mudir[$fullname]?></a></h4>
                        <p class="mudirp"><?=$mudir->position[$name]?></p>
                    </div>
                </div>
            </div>
          <?php endforeach;?>

        </div>

    </section>
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11941.856966197643!2d60.632965277770985!3d41.55919614530905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfced40ff9fa85%3A0x41213b3ab751e15c!2z0J7QsdC70LDRgdGC0L3QsNGPINCR0L7Qu9GM0L3QuNGG0LA!5e0!3m2!1sru!2s!4v1648214313035!5m2!1sru!2s"
                width="1900" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
