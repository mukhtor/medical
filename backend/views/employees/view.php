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
            'fullname_uz',
            'fullname_en',
            'fullname_ru',
//            'section_id',
//            'position_id',
            [
                'attribute'=>'section_id',
                'value'=>function($model){
                    return $model->section->name_uz;
                }
            ],
            [
                'attribute'=>'position_id',
                'value'=>function($model){
                    return $model->position->name_uz;
                }
            ],
            'phone_1',
            'phone_2',
            'email:email',
            'data_birth',
            'address_birth',
            'completed_institution',
            'spec',
            'degree',
//            'image',
            'status',
            [
                'attribute'=>'created_at',
                'value'=>function($model){
                    return date('Y m-d',$model->created_at);
                }
            ],  [
                'attribute'=>'updated-at',
                'value'=>function($model){
                    return date('Y m-d',$model->updated_at);
                }
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
