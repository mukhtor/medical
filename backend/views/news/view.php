<?php

use common\models\Menu;
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
                'attribute' => 'image',
                'label' => 'Surat',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img($model->image, ['style' => 'width:250px']);
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
                'label' => 'Ma\'lumot En',
            ],
//            'author',
            [
                'attribute' => 'author',
                'label' => 'Muallif',
                'value' => function ($model) {
                    return \common\models\User::findOne(['id' => $model->author])->username;
                }
            ],
//            'created_at',
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

            [
                'attribute' => 'show_count',
                'label' => 'Ko\'rilganlar Soni',
            ],
            'status',
//            'cate_id',
            [
                'attribute' => 'cate_id',
                'label' => 'Kategoriya',

                'value' => function ($model) {
                    $out = '';
                    foreach (Menu::find()->where(['id'=>json_decode($model->cate_id,',')])->all() as $category) {
                        $out .= @$category->name_uz . '  ';
                    }
                    return @$out;
                }
            ],
        ],
    ]) ?>

</div>
