<?php

use common\models\Events;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'E\'lonlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'E\'lon yaratish'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'value' => function(Events $events){
                    return Html::img($events->image,['style'=>'width:150px']);
                }
            ],
            [
                    'attribute' => 'title_uz',
                'label' => 'Sarlavha_uz',
                'value' => function(Events $events){
                    return @$events->title_uz;
                }
            ],
//            'title_en',
//            'title_ru',
            //'text_uz:ntext',
            //'text_en:ntext',
            //'text_ru:ntext',
            [
                    'attribute' => 'count',
                'label' => 'soni',
                'value' => function(Events $events){
                return @$events->count;
                }
            ],

//            'created_at',
            [
                    'attribute' => 'created_at',
                'label' => 'Kiritilgan sana',
                'value' => function(Events $events){
                    return date('Y m-d',$events->created_at);
                }
            ],
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Events $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
