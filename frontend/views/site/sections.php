<?php
$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$this->title = Yii::t('app','Sections');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="section service-2">
    <div class="container">
        <div class="row">
            <?php foreach ($sections as $section): ?>
                <div class="col-lg-4 col-md-6 ">
                    <div class="department-block mb-5">
                        <img src="<?=$section->image?>" alt="" class="img-fluid w-100">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color"><?=$section[$name]?></h4>
                            <br>
                            <a href="<?=\yii\helpers\Url::to(['section-more','id'=>$section->id])?>" class="read-more"><?=Yii::t('app','Read more')?><i
                                        class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>