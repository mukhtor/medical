<?php

use common\models\Employees;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employees');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Employees'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'created_at',
                'format' => 'html',
                'value' => function (Employees $employees) {
                    return Html::img($employees->image,['style'=>'width:150px']);
                }
            ],
            'fullname_uz',
//            'fullname_en',
//            'fullname_ru',
//            'section_id',
            [
                    'attribute' => 'section_id',
                'value' => function(Employees $employees){
                    return $employees->section->name_uz;
                }
            ],
//            'position_id',
        [
                'attribute' => 'position_id',
            'value' => function(Employees $employees){
                return $employees->position->name_uz;
            }
        ],
            'phone_1',
            //'phone_2',
            'email:email',
            //'data_birth',
            //'address_birth',
            //'completed_institution',
            //'spec',
            //'degree',
//            'image',
            //'status',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Employees $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
