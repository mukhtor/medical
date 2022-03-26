<?php

/** @var yii\web\View $this */

use common\models\Employees;
use yii\helpers\Html;

$this->title = 'Muassasa Haqida';
$name = "name_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
?>

<section class="section testimonial my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="section-title">
                    <h2 class="mb-4">Xorazm viloyat ko’p tarmoqli tibbiyot markazi</h2>
                    <div class="divider  my-4"></div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 testimonial-wrap offset-lg-6 slick-initialized slick-slider slick-dotted slick-vertical">
                <div class="slick-list draggable" style="height: 233.594px;">
                    <div class="slick-track">
                        <div class="testimonial-block slick-slide slick-cloned" style="width: 540px;">

                            <p style="font-size: 24px">
                                412 ta shifo o’rindan iborat, bo’lib
                                14 ta davolash bo’limlari, konsultativ poliklinika va diagnostika, reabilitatsiya,
                                laboratoriya, ichki dorixona va boshqa yordamchi bo’limlardan tashkil topgan.
                                Xozirda markazda 151 ta shifokor,
                                556 ta xamshira, 278 kichik tibbiy xodim xalqimizga astoydil xizmat ko’rsatishadi.
                            </p>
                            <i class="icofont-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="container">
        <h2 class="text-center">Inavatsion dastur bo’yicha
            amalga oshirilgan qurilish, tamirlash ishlari.
        </h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Yil</th>
                <th>Rekonstruksiya</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2015</td>
                <td>Konsultatiuv Poliklinika va Diagnostika bo’limlari rekonstruksiya qilindi</td>
            </tr>
            <tr>
                <td>2016</td>
                <td>207 ta shifo o’rindan iborat Terapiya bloki rekonstruksiya qilindi.</td>
            </tr>
            <tr>
                <td>2018</td>
                <td>40 ta shifo o’rindan iborat Otorinolaringologiya va
                    yuz-jag’ bo’limi, Laboratoriya, Ichki dorixona va Qon banki bo’limlari rekonstruksiya qilindi.
                </td>
            </tr>
            <tr>
                <td>2020</td>
                <td>2020 yil 31 avgustdan
                    170 ta shifo o’rindan iborat Xirurgiya bloki va qabul bo’limi qayta qurib bitkazilib foydalanishga
                    topshirildi.
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="title-color">BOSH SHIFOKOR:
                </h3>
            </div>
            <div class="col-lg-8">
                <h4>Egamberdiyev Shuhrat Iskandarovich <p style="font-style: italic">"Tibbiyot fanlar nomzodi"</p></h4>
                <img src="/style/images/about/sign.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!--<section class="section awards">-->
<!--    <div class="container">-->
<!--        <div class="row align-items-center">-->
<!--            <div class="col-lg-4">-->
<!--                <h2 class="title-color">Our Doctors achievements </h2>-->
<!--                <div class="divider mt-4 mb-5 mb-lg-0"></div>-->
<!--            </div>-->
<!--            <div class="col-lg-8">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="award-img">-->
<!--                            <img src="/style/images/about/3.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="award-img">-->
<!--                            <img src="/style/images/about/4.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="award-img">-->
<!--                            <img src="/style/images/about/1.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="award-img">-->
<!--                            <img src="/style/images/about/2.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="award-img">-->
<!--                            <img src="/style/images/about/5.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="award-img">-->
<!--                            <img src="/style/images/about/6.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="section team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4">Tibbiyot Markazimiz Mudirlari</h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach (Employees::find()->where(['position_id' => 1])->all() as $item): ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-block mb-5 mb-lg-0">
                        <img src="<?=$item->image?>" alt="" class="img-fluid w-100">

                        <div class="content">
                            <h4 class="mt-4 mb-0 text-center"><a href="doctor-single.html"><?=$item[$fullname]?></a></h4>
                            <p class="text-center"><?=$item->position[$name]?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
