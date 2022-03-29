<?php
$this->title = Yii::t('app','Events');
$this->params['breadcrumbs'][] = $this->title;

$title = "title_" . Yii::$app->language;
$name = "name_" . Yii::$app->language;
$fullname = "fullname_" . Yii::$app->language;
?>

<section class="section service-2">
    <div class="container">
        <div class="row">
            <?php foreach ($events as $event):?>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="service-block mb-5">
                    <a href="<?=\yii\helpers\Url::to(['site/events-more','id'=>$event->id])?>"><img src="<?=$event->image?>" alt="" class="img-fluid"></a>
                    <div class="content">
                        <a href="<?=\yii\helpers\Url::to(['site/events-more','id'=>$event->id])?>"><h4 class="mt-4 mb-2 title-color text-center"><?=$event->title_uz?></h4></a>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <strong><?=date('Y m-d',$event->created_at)?></strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <strong style="float: right"><i class="fa fa-eye"></i> <?=$event->count?></strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach;?>

    </div>
</section>
