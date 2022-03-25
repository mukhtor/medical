<?php

$this->title = Yii::t('app','Gallery');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .container{
        max-width: 80%!important;
    }
</style>

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
