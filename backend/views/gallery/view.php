<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gallery-view">

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
                    if ($model->type == 1) {
                        return Html::img($model->image, ['style' => 'width:300px']);
                    } elseif ($model->type == 2) {
                        return '<iframe width="300" height="200" src="https://www.youtube.com/embed/' . $model->image . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    }
                }
            ],
            [
                'attribute' => 'name',
                'label' => 'Nomi',
            ],
//            'image',
            [
                'attribute' => 'type',
                'label' => 'Turi',
                'value' => function ($model) {
                    if ($model->type == 1) {
                        return 'Surat';
                    } elseif ($model->type == 2) {
                        return 'video lavha';
                    }
                }
            ],
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
                    return date('Y m-d', $model->updated_at);
                }
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
