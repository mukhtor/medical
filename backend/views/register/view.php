<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Register */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="register-view">

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
                'attribute' => 'section_id',
                'label' => 'Bo\'lim',
                'value' => function ($model) {
                    return @$model->sections->name_uz;
                }
            ],
            [
                'attribute' => 'employee_id',
                'label' => 'Hodim',
                'value' => function ($model) {
                    return @$model->employees->fullname_uz;
                }
            ],
            [
                'attribute' => 'fullname',
                'label' => 'To\'liq Ismi',
            ],
            [
                'attribute' => 'phone',
                'label' => 'Telefon Raqami',
            ],
            'email:email',
            [
                'attribute' => 'date',
                'label' => 'Qabulga Yozilgan Vaqt',
                'value' => function ($model) {
                    return date('Y m-d', $model->date);
                }
            ],
            [
                'attribute' => 'information',
                'label' => 'Kasallik Haqida',
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
        ],
    ]) ?>

</div>
