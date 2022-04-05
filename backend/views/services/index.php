<?php

use common\models\Services;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pullik Hizmatlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Pullik Hizmatlar Qo\'shish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'section_id',
            [
                'attribute' => 'section_id',
                'label' => 'Bo\'limlar',
                'value' => function (Services $services) {
                    return @$services->section->name_uz;
                }
            ],
//            'name_uz',
            [
                'attribute' => 'name_uz',
                'label' => 'Nomi Uz',
                'value' => function (Services $services) {
                    return $services->name_uz;
                }
            ],
//            'name_en',
//            'name_ru',
//            'uz_measurement',
            [
                'attribute' => 'uz_measurement',
                'label' => 'O\'lchov Birligi',

            ],
            //'ru_measurement',
            //'en_measurement',
//            'uz_price',
//            'eu_price',
            [
                'attribute' => 'uz_price',
                'label' => 'Uz Narxi',

            ],
            [
                'attribute' => 'eu_price',
                'label' => 'Euro Narxi',

            ],
//            'date',
            [
                'attribute' => 'date',
                'label' => 'Yangilangan Sana',
                'value' => function (Services $services) {
                    return date('Y m-d', $services->date);
                }
            ],
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Services $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
