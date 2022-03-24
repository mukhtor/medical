<?php

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$desc = "desc_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
?>
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white"><?=$more->position[$name]?></span>
                    <h1 class="text-capitalize mb-5 text-lg"><?=$more[$fullname]?></h1>

                    <!-- <ul class="list-inline breadcumb-nav">
                      <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                      <li class="list-inline-item"><span class="text-white">/</span></li>
                      <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</section><section class="section doctor-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="doctor-img-block">
                    <img src="<?=$more->image?>"  alt="" class="img-fluid w-100">

                    <div class="info-block mt-4">
                        <h4 class="mb-0"><?=$more[$fullname]?></h4>
                        <p><?=$more->position[$name]?></p>

                    </div>
                    <div class="skill-list">
                        <h5 class="mb-4">Qo'shimcha Ma'lumotlari</h5>
                        <ul class="list-unstyled department-service">
                            <li><strong>Mutaxassisligi </strong> <?=$more->spec?></li>
                            <li><strong>Ma'lumoti </strong> <?=$more->degree?></li>
                            <li><strong>Tugatgan Muassasasi </strong> <?=$more->completed_institution?></li>
                            <li><strong>Tug'ilgan Manzili </strong> <?=$more->address_birth?></li>
                            <li><strong>Tug'ilgan Sanasi </strong> <?=$more->data_birth?></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget  gray-bg p-4">
                        <h5 class="mb-4">Aloqa Manzili</h5>
                        <div class="sidebar-contatct-info mt-4">
                            <p class="mb-0">Telefon Raqami</p>
                            <h4 class="text-color"><?=$more->phone_1?></h4>
                            <h4 class="text-color"><?=$more->phone_2?></h4>
                            <p class="mb-0">Elektron pochta manzili</p>
                            <h5 class="text-color-2"><?=$more->email?></h5>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 col-md-6">
                <div class="doctor-details mt-4 mt-lg-0">
                    <h2 class="text-md"><?=$more->section[$name]?></h2>
                    <div class="divider my-4"></div>
                    <h4>Mehnat Faoliyati</h4>
                    <p><?=$more->activity?></p>
                </div>
            </div>
        </div>
    </div>
</section>

