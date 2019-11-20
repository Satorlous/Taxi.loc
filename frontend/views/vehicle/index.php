<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VehicleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Транспортные средства';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать ТС', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'name','label' => 'Название'],
                ['label' => 'Вместимость', 'attribute'=>'capacity', 'headerOptions' => ['width' => '50']],
                ['label' => 'Тип', 'attribute'=>'type', 'headerOptions' => ['width' => '150']],
                ['attribute' => 'lineName','label' => 'Маршрут', 'value'=>'line.code'],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'headerOptions' => ['width' => '50'],
                    'template' => '{update} {delete} {link}',
                ],
            ],
    ]); ?>


</div>
