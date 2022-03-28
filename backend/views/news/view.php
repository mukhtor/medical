<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">

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
                    'attribute'=>'image',
                'format'=>'html',
                'value'=>function($model){
                    return Html::img($model->image,['style'=>'width:250px']);
                }
            ],
            'title_uz',
            'title_ru',
            'title_en',
            'text_uz:ntext',
            'text_ru:ntext',
            'text_en:ntext',
//            'author',
            [
                'attribute' => 'author',
                'value' => function ($model) {
                    return \common\models\User::findOne(['id' => $model->author])->username;
                }
            ],
//            'created_at',
            [
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date('Y m-d', $model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($model) {
                    return date('Y m-d', $model->updated_at);
                }
            ],

            'show_count',
            'status',
//            'cate_id',
            [
                'attribute' => 'cate_id',
                'value' => function ($model) {
                    $out = '';
                    foreach ($model->cate as $category) {
                        $out .= $category->name_uz.'  ';
                    }
                    return $out;
                }
            ],
        ],
    ]) ?>

</div>
