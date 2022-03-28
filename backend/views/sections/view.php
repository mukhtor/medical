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
                'format' => 'html',
                'value' => function($model){
                    return Html::img($model->image,['style'=>'width:250px']);
                }
            ],
            'name_uz',
            'name_en',
            'name_ru',
            'desc_uz:ntext',
            'desc_en:ntext',
            'desc_ru:ntext',
//            'image',
            'status',
            [
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date('Y m-d', $model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($model) {
                    return date('Y m-d', $model->created_at);
                }
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
