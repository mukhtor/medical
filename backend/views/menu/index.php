<?php

use common\models\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Menyular');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Menyu yaratish'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'name_uz',
                'label' => 'Menyu nomi',
                'value' => function (Menu $menu) {
                    return @$menu->name_uz;
                }
            ],
//            'name_en',
//            'name_ru',
//            'slug',
            [
                'attribute' => 'url',
                'label' => 'manzil',
                'value' => function (Menu $menu) {
                    return @$menu->url;
                }
            ],
            //'parent',
            [
                'attribute' => 'parent',
                'label' => 'Parent',
                'value' => function (Menu $menu) {
                    if ($menu->parent != null) {
                        return @Menu::findOne(['id' => $menu->parent])->name_uz;
                    } else {
                        return '';
                    }
                }
            ],
            //'status',
//            'created_at',
            [
                'attribute' => 'created_at',
                'label' => 'Kiritilgan vaqt',
                'value' => function (Menu $menu) {
                    return date('Y m-d', $menu->created_at);
                }
            ],
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
