<?php

use common\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create News'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',

            'title_uz',

//            'title_ru',
//            'title_en',
//            'text_uz:ntext',
            //'text_ru:ntext',
            //'text_en:ntext',
            //'image',
            [
                'attribute' => 'author',
                'value' => function (News $news) {
                    return \common\models\User::findOne(['id' => $news->author])->username;
                }
            ],
//            'created_at',
            [
                'attribute' => 'created_at',
                'value' => function (News $news) {
                    return date('Y m-d', $news->created_at);
                }
            ],
//            'updated_at',
            //'show_count',
            //'status',
//            'cate_id',
            [
                'attribute' => 'cate_id',
                'value' => function (News $news) {
                    $out = '';
                    foreach ($news->cate as $category) {
                        $out .= $category->name_uz.'  ';
                    }
                    return $out;
                }
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, News $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
