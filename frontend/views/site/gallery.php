<?php
?>
<style>
    .container{
        max-width: 80%!important;
    }
</style>
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg"><?=Yii::t('app','Gallery')?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery-block cards-gallery">
    <div class="container">
        <div class="heading">
            <h2></h2>
        </div>
        <div class="row">
         <?php foreach ($galleries as $gallery):?>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="<?=$gallery->image?>">
                        <img style="width: 100%;height: 350px" src="<?=$gallery->image?>" alt="Card Image" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <p class="text-muted card-text"><?=$gallery->name?></p>
                    </div>
                </div>
            </div>
         <?php endforeach;?>
        </div>
    </div>
</section>
