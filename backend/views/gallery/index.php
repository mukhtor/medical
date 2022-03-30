<?php

use common\models\Gallery;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Gallereyalar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Gallereya yaratish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'image',
            [
                'attribute' => 'image',
                'label' => 'Rasmlar',
                'format' => 'raw',
                'value' => function (Gallery $gallery) {
                    if ($gallery->type == 1) {
                        return Html::img($gallery->image, ['style' => 'width:300px']);
                    } elseif ($gallery->type == 2) {
                        return '<iframe width="300" height="200" src="https://www.youtube.com/embed/' . $gallery->image . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    }
                }
            ],
            [
                'attribute' => 'name',
                'label' => 'Nomi',
                'value' => function (Gallery $gallery) {
                    return @$gallery->name;
                }
            ],
//            'status',
//            'created_at',
            [
                'attribute' => 'created_at',
                'label' => 'Kiritilgan vaqti',
                'value' => function (Gallery $gallery) {
                    return date('Y m-d', $gallery->created_at);
                }
            ],
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Gallery $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
