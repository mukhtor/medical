<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sections */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sections'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sections-view">

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
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img($model->image, ['style' => 'width:250px']);
                }
            ],
            [
                'attribute' => 'name_uz',
                'label' => 'Nomi Uz'
            ], [
                'attribute' => 'name_ru',
                'label' => 'Nomi Ru'
            ], [
                'attribute' => 'name_en',
                'label' => 'Nomi En'
            ],

            [
                'attribute' => 'desc_uz',
                'label' => 'Ma\'lumot Uz'
            ],
            [
                'attribute' => 'desc_ru',
                'label' => 'Ma\'lumot Ru'
            ],
            [
                'attribute' => 'desc_en',
                'label' => 'Ma\'lumot En'
            ],
//            'image',
            'status',
            [
                'attribute' => 'created_at',
                'label' => 'Kiritilingan Sana',

                'value' => function ($model) {
                    return date('Y m-d', $model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'label' => 'O\'zgartirilgan Sana',

                'value' => function ($model) {
                    return date('Y m-d', $model->created_at);
                }
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
