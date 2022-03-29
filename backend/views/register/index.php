<?php

use common\models\Register;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\RegisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Registers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Register'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'section_id',
            [
                    'attribute' => 'section_id',
                'value' => function(Register $register){
                    return $register->sections->name_uz;
                }
            ],
            [
                    'attribute' => 'employee_id',
                'value' => function(Register $register){
                    return $register->employees->fullname_uz;
                }
            ],
//            'employee_id',
            'fullname',
            'phone',
            //'email:email',
//            'date',
            [
                    'attribute' => 'date',
                'value' => function(Register $register){
                    return date('Y m-d',$register->date);
                }
            ],
            //'information:ntext',
            //'status',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Register $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
