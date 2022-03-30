<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Employees */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Tahrirlash'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'O\'chirish'), ['delete', 'id' => $model->id], [
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
//            'fullname_uz',
            [
                'attribute' => 'fullname_uz',
                'label' => 'To\'liq Nomi_uz',
            ],
            [
                'attribute' => 'fullname_ru',
                'label' => 'To\'liq Nomi_ru',
            ],
            [
                'attribute' => 'fullname_en',
                'label' => 'To\'liq Nomi_en',
            ],
//            'section_id',
//            'position_id',
            [
                'attribute' => 'section_id',
                'label' => 'Bo\'lim',
                'value' => function ($model) {
                    return $model->section->name_uz;
                }
            ],
            [
                'attribute' => 'position_id',
                'label' => 'Lavozim',
                'value' => function ($model) {
                    return $model->position->name_uz;
                }
            ],
            [
                'attribute' => 'phone_1',
                'label' => 'Telefon Raqami 1',
            ],
            [
                'attribute' => 'phone_2',
                'label' => 'Telefon Raqami 2',
            ],
            'email:email',
            [
                'attribute' => 'data_birth',
                'label' => 'Tug\'ilgan Sana',
            ],
            [
                'attribute' => 'address_birth',
                'label' => 'Tug\'ilgan Manzil'
            ],
            [
                'attribute' => 'completed_institution',
                'label' => 'Yakunlagan Muassasasi',
            ],
            [
                'attribute' => 'spec',
                'label' => 'Mutaxassisligi',
            ],
            [
                'attribute' => 'degree',
                'label' => 'Unvoni',
            ],

//            'image',
            'status',
            [
                'attribute' => 'created_at',
                'label' => 'Kiritilgan Vaqt',
                'value' => function ($model) {
                    return date('Y m-d', $model->created_at);
                }
            ], [
                'attribute' => 'updated-at',
                'label' => 'Tahrirlangan Vaqt',
                'value' => function ($model) {
                    return date('Y m-d', $model->updated_at);
                }
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
