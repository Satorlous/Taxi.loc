<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Маршруты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="line-index">

    <h1 class="float-right"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать маршрут', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'header' => 'Название',
                'attribute' => 'code',
            ],
            [
                'header' => 'Время начала работы',
                'attribute' => 'start_time_operation',
            ],
            [
                'header' => 'Время конца работы',
                'attribute' => 'end_time_operation',
            ],
            [
                'header' => 'Тип',
                'attribute' => 'type',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['width' => '70'],
                'template' => '{view} {update} {delete} {link}',
            ],
        ],
    ]); ?>


</div>
