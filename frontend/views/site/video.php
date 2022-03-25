<?php

$this->title = Yii::t('app','Video');
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
            <?php foreach ($video as $gallery):?>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 transform-on-hover">
                        <a class="lightbox">
                            <iframe width="476" height="315" src="https://www.youtube.com/embed/<?=$gallery->image?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

