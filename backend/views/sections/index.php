<?php

use common\models\Sections;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SectionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bo\'limlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sections-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Bo\'lim yaratish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                    'attribute' => 'image',
                'label' => 'Rasmlar',
                'format' => 'html',
                'value' => function(Sections $sections){
                    return Html::img($sections->image,['style'=>'width:150px']);
                }
            ],
            [
                    'attribute' => 'name_uz',
                'label' => 'Bo\'lim nomi_uz',
                'value' => function(Sections $sections){
            return $sections->name_uz;
                }
            ],
//            'name_en',
//            'name_ru',
//            'desc_uz:ntext',
            //'desc_en:ntext',
            //'desc_ru:ntext',
//            'image',
            //'status',
//            'created_at',
            [
                'attribute' => 'created_at',
                'label' => 'Kiritilgan vaqti',
                'value' => function (Sections $sections) {
                    return date('Y m-d', $sections->created_at);
                }
            ],
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sections $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
