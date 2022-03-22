<?php

/** @var yii\web\View $this */

/** @var \common\models\Sections $sections */

/** @var \common\models\News $latest_news */

use common\models\Employees;
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Url;

$this->title = 'My Yii Application';
$title = "title_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$desc = "desc_" . Yii::$app->language;
?>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>
    <style>
        .taga {
            text-decoration: none;
        }

        .taga h5 :hover {
            color: rgba(117, 18, 18, 0.89);
        }

        @media (max-width: 768px) {
            .carousel-inner .carousel-item > div {
                display: none;
            }

            .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-start,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* display 4 */
        @media (min-width: 768px) {
            .carousel-inner .carousel-item-right.active,
            .carousel-inner .carousel-item-next,
            .carousel-item-next:not(.carousel-item-start) {
                transform: translateX(25%) !important;
            }

            .carousel-inner .carousel-item-left.active, .carousel-item-prev:not(.carousel-item-end),
            .active.carousel-item-start, .carousel-item-prev:not(.carousel-item-end) {
                transform: translateX(-25%) !important;
            }

            .carousel-item-next.carousel-item-start {
                transform: translateX(0) !important;
            }

            .carousel-inner .carousel-item-prev,
            .carousel-item-prev:not(.carousel-item-end) {
                transform: translateX(-25%) !important;
            }
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(0) !important;
        }
    </style>
</head>
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <h3 class="mb-4 pr-5" style="font-style: italic;color: rgba(0,0,0,0.54)">"Hech qachon davolanishni
                        keyinroq
                        qoldirmang"<br><br>
                        “Shifokor qo'rqoq bo'lmasligi kerak. Ruhi zaif odamga kasallar ishonmaydi."
                    </h3><sub style="font-size: 20px">(Gippokrat)</sub>
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
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                            family medicine.</p>
                        <a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emegency Cases</span>
                        <h4 class="mb-3">1-800-700-6200</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
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
                    <img src="style/images/about/img-1.jpg" alt="" class="img-fluid">
                    <img src="style/images/about/img-2.jpg" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="style/images/about/img-3.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">Personal care <br>&amp; healthy living</h2>
                    <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti
                        ipsum officia dolores repellat laudantium obcaecati neque.</p>

                    <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                                class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
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
                        <span class="h3"><?= \common\models\Sections::find()->count() ?></span>
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
                        <span class="h3"><?= Employees::find()->count() ?></span>
                        <p><?= Yii::t('app', 'Expert Doctors') ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3"><?= \common\models\News::find()->count() ?></span>
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
                    <p>Eng So'ngi</p>
                    <h2>Yangiliklar</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($latest_news as $news) : ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="<?= $news->image ?>" alt="" class="img-fluid">
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="mt-4 mb-2 title-color"><?= date('Y, m-d', $news->created_at) ?></h6>
                                </div>
                                <div class="col-lg-6">
                                    <h6 style="float: right" class="mt-4 mb-2 title-color"><i
                                                class="icofont-eye-alt">22</i></h6>
                                </div>
                            </div>
                            <a href="" class="mb-4 list-unstyled footer-menu"></a>
                            <div class="widget">
                                <ul class="list-unstyled footer-menu lh-35">
                                    <li><a style="text-decoration: none"
                                           href="<?= Url::to(['site/news-more', 'id' => $news->id]) ?>"><?= substr($news[$title], 0, 150) ?>
                                            ...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center">
            <div class="widget mb-5 mb-lg-0">
                <ul class="list-unstyled footer-menu lh-35">
                    <li><a style="font-size: 28px" href="<?= Url::to(['site/news']) ?>">More</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <div class="divider mx-auto my-4"></div>
                    <p>Tibbiyot Markazimizning.</p>
                    <h2>Bo'limlari</h2>

                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($sections as $section) : ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="<?=Url::to(['site/section-more','id'=>$section->id])?>">
                        <div class="service-item mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-medical-sign-alt text-lg"></i>
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
<section class="section service-2">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
            <div class="section-title">
                <div class="divider mx-auto my-4"></div>
                <p>Tibbiyot Markazimizning.</p>
                <h2>Mudirlari</h2>

            </div>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <?php foreach (Employees::find()->where(['position_id' => 1])->all() as $item): ?>
                <?php if ($item->id == 1): ?>
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card ">
                                <img style="height: 190px" class="img-fluid" src="<?= $item->image ?>">
                                <a class="taga" href="<?= Url::to(['site/employee-more', 'id' => $item->id]) ?>">
                                    <h5 class="text-center my-4"><?= $item[$fullname] ?></h5>
                                </a>
                                <p style="color: rgba(0,0,0,0.53)"
                                   class="text-center "><?= $item->position[$name] ?></p>

                                <p style="color: rgba(0,0,0,0.53)"
                                   class="text-center "><?= $item->section[$name] ?></p>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <img style="height: 190px" class="img-fluid" src="<?= $item->image ?>">
                                <a class="taga" href="<?= Url::to(['site/employee-more', 'id' => $item->id]) ?>">
                                    <h5 class="text-center my-4"><?= $item[$fullname] ?></h5>
                                </a>
                                <p class="text-center" style="color: rgba(0,0,0,0.53)"><?= $item->position[$name] ?></p>
                                <p class="text-center" style="color: rgba(0,0,0,0.53)"><?= $item->section[$name] ?></p>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<hr>
<script type="text/javascript">
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000
    })

    $('.carousel .carousel-item').each(function () {
        var minPerSlide = 4
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>