<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Services */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="services-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Tahrirlash'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'section_id',
                'value' => function($model){
                    return $model->section->name_uz;
                }
            ],
            'name_uz',
            'name_en',
            'name_ru',
            'uz_measurement',
            'ru_measurement',
            'en_measurement',
            'uz_price',
            'eu_price',
            [
                'attribute' => 'date',
                'value' => function($model){
                    return date('Y m-d',$model->date);
                }
            ],
            [
                'attribute' => 'created_at',
                'value' => function($model){
                    return date('Y m-d',$model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function($model){
                    return date('Y m-d',$model->updated_at);
                }
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
