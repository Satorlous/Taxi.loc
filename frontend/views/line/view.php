<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Line */

$this->title = $model->id;

\yii\web\YiiAsset::register($this);
?>
<div class="line-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Подтвердите действие!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Код',
                'attribute' => 'id',
            ],
            [
                'label' => 'Название',
                'attribute' => 'code',
            ],
            [
                'label' => 'Время начала работы',
                'attribute' => 'start_time_operation',
            ],
            [
                'label' => 'Время конца работы',
                'attribute' => 'end_time_operation',
            ],
            [
                'label' => 'Тип',
                'attribute' => 'type',
            ],
            [
                'label' => 'Карта маршрута',
                'attribute' => 'map',
            ],
        ],
        'template' => '<tr><th>{label}</th><td style="width:60%;">{value}</td></tr>',
    ]) ?>

</div>
