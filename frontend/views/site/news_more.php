<?php

use common\models\Menu;
use yii\helpers\Url; ?>
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">News details</span>
                    <h1 class="text-capitalize mb-5 text-lg">Blog Single</h1>

                    <!-- <ul class="list-inline breadcumb-nav">
                      <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                      <li class="list-inline-item"><span class="text-white">/</span></li>
                      <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            <img style="width: 100%" src="<?=$more->image?>" alt="" class="img-fluid">

                            <div class="blog-item-content mt-5">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Equipment</span>
                                    <span class="text-muted text-capitalize mr-3"><i class="icofont-eye-alt mr-2"></i><?=$more->show_count?></span>
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> <?=date('d M Y',$more->created_at)?></span>
                                </div>

                                <h2 style="font-size: 24px;text-align: center" class="mb-4 text-md"><?=$more->title_uz?></h2>


                                <p>
                                    <?=$more->text_uz?>
                                </p>

                                <div class="mt-5 clearfix">
                                    <ul class="float-left list-inline tag-option">
                                        <?php foreach (json_decode($more->cate_id) as $item) :?>
                                        <li class="list-inline-item"><a href="#"><?= Menu::findOne(['id'=>$item])->name_uz?></a></li>
                                        <?php endforeach;?>
                                    </ul>

                                    <ul class="float-right list-inline">
                                        <li class="list-inline-item"> Share: </li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-facebook" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-twitter" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-pinterest" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">

                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-widget search  mb-3 ">
                        <h5>Search Here</h5>
                        <form action="<?=Url::to(['site/search'])?>" class="search-form">
                            <input type="text" class="form-control" name="query" placeholder="search">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="sidebar-widget tags mb-3">
                        <h5 class="mb-4">Tags</h5>
                        <?php foreach ($menu as $value):?>
                            <a href="#"><?=$value->name_uz?></a>
                        <?php endforeach;?>
                    </div>


                    <div class="sidebar-widget schedule-widget mb-3">
                        <h5 class="mb-4">Time Schedule</h5>

                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Monday - Friday</a>
                                <span>9:00 - 17:00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Saturday</a>
                                <span>9:00 - 16:00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Sunday</a>
                                <span>Closed</span>
                            </li>
                        </ul>

                        <div class="sidebar-contatct-info mt-4">
                            <p class="mb-0">Need Urgent Help?</p>
                            <h3>+23-4565-65768</h3>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
