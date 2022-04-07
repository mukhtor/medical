<?php

use common\models\Register;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\RegisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Navbatlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Navbat yozilishni yaratish'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'label' => 'Bo\'lim',
                'value' => function (Register $register) {
                    return @$register->sections->name_uz;
                }
            ],
            [
                'attribute' => 'employee_id',
                'label' => 'Hodim',
                'value' => function (Register $register) {
                    return @$register->employees->fullname_uz;
                }
            ],
//            'employee_id',
            [
                'attribute' => 'fullname',
                'label' => 'To\'liq ismi',
                'value' => function (Register $register) {
                    return @$register->fullname;
                }
            ],
            [
                'attribute' => 'phone',
                'label' => 'Telefon raqam',
                'value' => function (Register $register) {
                    return @$register->phone;
                }
            ],
            //'email:email',
//            'date',
            [
                'attribute' => 'date',
                'label' => 'Ro\'yxatga olingan vaqti',
                'value' => function (Register $register) {
                    return date('Y m-d', $register->date);
                }
            ],
            //'information:ntext',
            //'status',
            [
                    'attribute' => 'status',
                'format' => 'raw',
                'label' => 'Holati',
                'value' => function(Register $register){
                    if ($register->status == 9){
                        return '<a class="btn btn-warning text-white">Ko`rilmadi</a>';
                    }
                    elseif ($register->status == 10){
                        return '<a class="btn btn-success">Javob Berildi</a>';

                    }
                    elseif ($register->status == 0){
                        return '<a class="btn btn-danger">Rad Etildi</a>';
                    }
                }
            ],
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
