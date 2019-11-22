<?php

use Symfony\Component\VarDumper\VarDumper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DriverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drivers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Driver', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'birth_date',
            'email:email',
            'phone',
            [
                'attribute' => 'avatar',
                'format' => 'image',
                'value' => function($data){
                    return Html::img('@frontend/web/uploads/'.$data->avatar);
                },
            ],
            ['attribute' => 'vehicleName','label' => 'ТС', 'value'=>'vehicle.name'],

            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['width' => '50'],
                'template' => '{update} {delete} {link}',
            ],
        ],
    ]); ?>


</div>
