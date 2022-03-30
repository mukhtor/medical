<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Events */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="events-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
                'attribute' => 'image',
                'label' => 'Surat',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img($model->image, ['style' => 'width:200px']);
                }
            ],
            [
                'attribute' => 'title_uz',
                'label' => 'Sarlavha Uz'
            ],
            [
                'attribute' => 'title_en',
                'label' => 'Sarlavha En'
            ],
            [
                'attribute' => 'title_ru',
                'label' => 'Sarlavha Ru'
            ],
            [
                'attribute' => 'text_uz',
                'label' => 'Ma\'lumot Uz'
            ], [
                'attribute' => 'text_ru',
                'label' => 'Ma\'lumot Ru'
            ], [
                'attribute' => 'text_en',
                'label' => 'Ma\'lumot En'
            ],
            [
                'attribute' => 'count',
                'label' => 'Ko\'rilganlar Soni'
            ],
            [
                'attribute' => 'created_at',
                'label'=>'Kiritilingan Sana',
                'value' => function ($model) {
                    return date('Y m-d', $model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'label'=>'O\'zgartirilgan Sana',
                'value' => function ($model) {
                    return date('Y m-d', $model->updated_at);
                }
            ],
        ],
    ]) ?>

</div>
